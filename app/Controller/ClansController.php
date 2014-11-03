<?php
App::uses('AppController', 'Controller');
/**
 * Clans Controller
 *
 * @property Clan $Clan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ClansController extends AppController {

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
		$this->Clan->recursive = 0;
		$this->set('clans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Clan->exists($id)) {
			throw new NotFoundException(__('Invalid clan'));
		}
		$options = array('conditions' => array('Clan.' . $this->Clan->primaryKey => $id));
		$this->set('clan', $this->Clan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clan->create();
			if ($this->Clan->save($this->request->data)) {
				$this->Session->setFlash(__('The clan has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clan could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$yakuzas = $this->Clan->Yakuza->find('list');
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
        $this->Clan->id = $id;
		if (!$this->Clan->exists($id)) {
			throw new NotFoundException(__('Invalid clan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clan->save($this->request->data)) {
				$this->Session->setFlash(__('The clan has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clan could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Clan.' . $this->Clan->primaryKey => $id));
			$this->request->data = $this->Clan->find('first', $options);
		}
		$yakuzas = $this->Clan->Yakuza->find('list');
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
		$this->Clan->id = $id;
		if (!$this->Clan->exists()) {
			throw new NotFoundException(__('Invalid clan'));
		}
		if ($this->Clan->delete()) {
			$this->Session->setFlash(__('Clan deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clan was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
