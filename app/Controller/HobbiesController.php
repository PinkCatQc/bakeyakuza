<?php
App::uses('AppController', 'Controller');
/**
 * Hobbies Controller
 *
 * @property Hobby $Hobby
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HobbiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hobby->recursive = 0;
		$this->set('hobbies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
		$this->set('hobby', $this->Hobby->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hobby->create();
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$members = $this->Hobby->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Hobby->id = $id;
		if (!$this->Hobby->exists($id)) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hobby->save($this->request->data)) {
				$this->Session->setFlash(__('The hobby has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hobby could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Hobby.' . $this->Hobby->primaryKey => $id));
			$this->request->data = $this->Hobby->find('first', $options);
		}
		$members = $this->Hobby->Member->find('list');
		$this->set(compact('members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Hobby->id = $id;
		if (!$this->Hobby->exists()) {
			throw new NotFoundException(__('Invalid hobby'));
		}
		if ($this->Hobby->delete()) {
			$this->Session->setFlash(__('Hobby deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hobby was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
