<?php
App::uses('AppController', 'Controller');
/**
 * Hierarchies Controller
 *
 * @property Hierarchy $Hierarchy
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HierarchiesController extends AppController {

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
		$this->Hierarchy->recursive = 0;
		$this->set('hierarchies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hierarchy->exists($id)) {
			throw new NotFoundException(__('Invalid hierarchy'));
		}
		$options = array('conditions' => array('Hierarchy.' . $this->Hierarchy->primaryKey => $id));
		$this->set('hierarchy', $this->Hierarchy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hierarchy->create();
			if ($this->Hierarchy->save($this->request->data)) {
				$this->Session->setFlash(__('The hierarchy has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hierarchy could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$yakuzas = $this->Hierarchy->Yakuza->find('list');
		$this->set(compact('yakuzas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Hierarchy->id = $id;
		if (!$this->Hierarchy->exists($id)) {
			throw new NotFoundException(__('Invalid hierarchy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hierarchy->save($this->request->data)) {
				$this->Session->setFlash(__('The hierarchy has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hierarchy could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Hierarchy.' . $this->Hierarchy->primaryKey => $id));
			$this->request->data = $this->Hierarchy->find('first', $options);
		}
		$yakuzas = $this->Hierarchy->Yakuza->find('list');
		$this->set(compact('yakuzas'));
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
		$this->Hierarchy->id = $id;
		if (!$this->Hierarchy->exists()) {
			throw new NotFoundException(__('Invalid hierarchy'));
		}
		if ($this->Hierarchy->delete()) {
			$this->Session->setFlash(__('Hierarchy deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hierarchy was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
