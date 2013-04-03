<?php
App::uses('AppController', 'Controller');
/**
 * Deposits Controller
 *
 * @property Deposit $Deposit
 */
class DepositsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Deposit->recursive = 0;
		$this->set('deposits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deposit->exists($id)) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		$options = array('conditions' => array('Deposit.' . $this->Deposit->primaryKey => $id));
		$this->set('deposit', $this->Deposit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deposit->create();
			if ($this->Deposit->save($this->request->data)) {
				$this->Session->setFlash(__('The deposit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deposit could not be saved. Please, try again.'));
			}
		}
		$tours = $this->Deposit->Tour->find('list');
		$members = $this->Deposit->Member->find('list');
		$this->set(compact('tours', 'members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Deposit->exists($id)) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Deposit->save($this->request->data)) {
				$this->Session->setFlash(__('The deposit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deposit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deposit.' . $this->Deposit->primaryKey => $id));
			$this->request->data = $this->Deposit->find('first', $options);
		}
		$tours = $this->Deposit->Tour->find('list');
		$members = $this->Deposit->Member->find('list');
		$this->set(compact('tours', 'members'));
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
		$this->Deposit->id = $id;
		if (!$this->Deposit->exists()) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Deposit->delete()) {
			$this->Session->setFlash(__('Deposit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Deposit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
