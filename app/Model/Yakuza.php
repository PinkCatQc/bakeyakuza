<?php
App::uses('AppModel', 'Model');
/**
 * Yakuza Model
 *
 * @property User $User
 * @property Clan $Clan
 * @property Hierarchy $Hierarchy
 */
class Yakuza extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Yakuzas';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'origin';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'origin' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'creation' => array(
			'date' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'membership' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'activities' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'courriel' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
                'filename' => array(
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg')),
				'message' => 'Invalid file, only images allowed',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// custom callback to deal with the file upload
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Something went wrong processing your file',
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'last' => TRUE,
			)		
		),
	);

        
        /**
	 * Upload Directory relative to WWW_ROOT
	 * @param string
	 */
	public $uploadDir = 'uploads';

	/**
        * Process the Upload
        * @param array $check
        * @return boolean
        */
       public function processUpload($check=array()) {
               // deal with uploaded file
               if (!empty($check['filename']['tmp_name'])) {

                       // check file is uploaded
                       if (!is_uploaded_file($check['filename']['tmp_name'])) {
                               return FALSE;
                       }

                       // build full filename
                       $filename = WWW_ROOT . $this->uploadDir . DS . Inflector::slug(pathinfo($check['filename']['name'], PATHINFO_FILENAME)).'.'.pathinfo($check['filename']['name'], PATHINFO_EXTENSION);

                       // @todo check for duplicate filename

                       // try moving file
                       if (!move_uploaded_file($check['filename']['tmp_name'], $filename)) {
                               return FALSE;

                       // file successfully uploaded
                       } else {
                               // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                               $this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename) );
                       }
               }
               return TRUE;
       }
        
        /**
        * Before Save Callback
        * @param array $options
        * @return boolean
        */
       public function beforeSave($options = array()) {
               // a file has been uploaded so grab the filepath
               if (!empty($this->data[$this->alias]['filepath'])) {
                       $this->data[$this->alias]['filename'] = $this->data[$this->alias]['filepath'];
               }
               return parent::beforeSave($options);
       }
        
        
        /**
        * Before Validation
        * @param array $options
        * @return boolean
        */
       public function beforeValidate($options = array()) {
               // ignore empty file - causes issues with form validation when file is empty and optional
               if (!empty($this->data[$this->alias]['filename']['error']) && $this->data[$this->alias]['filename']['error']==4 && $this->data[$this->alias]['filename']['size']==0) {
                       unset($this->data[$this->alias]['filename']);
               }
               parent::beforeValidate($options);
       }

        
        
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Clan' => array(
			'className' => 'Clan',
			'foreignKey' => 'yakuza_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Hierarchy' => array(
			'className' => 'Hierarchy',
			'foreignKey' => 'yakuza_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
