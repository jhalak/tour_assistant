<?php
App::uses('AppController', 'Controller');
/**
 * Tours Controller
 *
 * @property Tour $Tour
 */
class ToursController extends AppController {
  
  public function beforeFilter() {
    parent::beforeFilter();
    if (!empty($this->request->params['pass'])) {
      $this->set('tid', $this->request->params['pass'][0]);
    }
  } 

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tour->recursive = 0;
		$this->set('tours', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tour->exists($id)) {
			throw new NotFoundException(__('Invalid tour'));
		}
		$options = array('conditions' => array('Tour.' . $this->Tour->primaryKey => $id));
		$this->set('tour', $this->Tour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tour->create();
			if ($this->Tour->save($this->request->data)) {
				$this->Session->setFlash(__('The tour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tour->User->find('list');
		$members = $this->Tour->Member->find('list');
		$this->set(compact('users', 'members'));
    $this->set('loggedInUid', $this->Tour->getLoggedInUid());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tour->exists($id)) {
			throw new NotFoundException(__('Invalid tour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tour->save($this->request->data)) {
				$this->Session->setFlash(__('The tour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tour.' . $this->Tour->primaryKey => $id));
			$this->request->data = $this->Tour->find('first', $options);
		}
		$users = $this->Tour->User->find('list');
		$members = $this->Tour->Member->find('list');
		$this->set(compact('users', 'members'));
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
		$this->Tour->id = $id;
		if (!$this->Tour->exists()) {
			throw new NotFoundException(__('Invalid tour'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tour->delete()) {
			$this->Session->setFlash(__('Tour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
