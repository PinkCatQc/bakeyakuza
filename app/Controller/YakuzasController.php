<?php
App::uses('AppController', 'Controller');
/**
 * Yakuzas Controller
 *
 * @property Yakuza $Yakuza
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class YakuzasController extends AppController {

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
		$this->Yakuza->recursive = 0;
		$this->set('yakuzas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Yakuza->exists($id)) {
			throw new NotFoundException(__('Invalid yakuza'));
		}
		$options = array('conditions' => array('Yakuza.' . $this->Yakuza->primaryKey => $id));
		$this->set('yakuza', $this->Yakuza->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Yakuza->create();
			if ($this->Yakuza->save($this->request->data)) {
				$this->Session->setFlash(__('The yakuza has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The yakuza could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$users = $this->Yakuza->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Yakuza->id = $id;
		if (!$this->Yakuza->exists($id)) {
			throw new NotFoundException(__('Invalid yakuza'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Yakuza->save($this->request->data)) {
				$this->Session->setFlash(__('The yakuza has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The yakuza could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Yakuza.' . $this->Yakuza->primaryKey => $id));
			$this->request->data = $this->Yakuza->find('first', $options);
		}
		$users = $this->Yakuza->User->find('list');
		$this->set(compact('users'));
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
		$this->Yakuza->id = $id;
		if (!$this->Yakuza->exists()) {
			throw new NotFoundException(__('Invalid yakuza'));
		}
		if ($this->Yakuza->delete()) {
			$this->Session->setFlash(__('Yakuza deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Yakuza was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
