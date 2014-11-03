<?php
App::uses('AppModel', 'Model');
/**
 * Hierarchy Model
 *
 * @property Yakuza $Yakuza
 */
class Hierarchy extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Hierarchies';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'level';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'level' => array(
			'inList' => array(
				'rule' => array('inList', array('1 - Oyabun : Family Boss', '2 - Saiko-Komom : Administration',
						'2 - Wagashira : First Lieutenant', '2 - Shateigashira : Second Lieutenant', '3 - Shingiin : Law Advisor'
					, '3 - Kyodai : Big Brothers', '4 - Kaikei : Accountants', '4 - Shatei : Little Brothers')),					
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Yakuza' => array(
			'className' => 'Yakuza',
			'foreignKey' => 'yakuza_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
