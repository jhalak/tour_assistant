<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 * @property Member $Member
 */
class MembersController extends AppController {

	public function all() {
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
	  if (empty($this->request->params['tid'])) {
	    $this->redirect(array('action' => 'all'));
	  }
	  
		$this->paginate = array(
			'joins' => array(
		    array(
		  		'table' => 'members_tours',
		    	'alias' => 'MembersTours',
		    	'type' => 'INNER',
		    	'conditions' => array(
		    		'MembersTours.member_id = Member.id'
		      )
		    )
		  ),
			'conditions' => array('MembersTours.tour_id' => $this->request->params['tid']),
			'recursive' => 0,
		);
		$members = $this->paginate('Member');
		$this->set('members', $members);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
		$this->set('member', $this->Member->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
		$users = $this->Member->User->find('list');
		$tours = $this->Member->Tour->find('list');
		$this->set(compact('users', 'tours'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		  
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
			$this->request->data = $this->Member->find('first', $options);
		}
		$users = $this->Member->User->find('list');
		$tours = $this->Member->Tour->find('list');
		$this->set(compact('users', 'tours'));
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
		$this->Member->id = $id;
		$redirect_path = array('action' => 'index');
		
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Invalid member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('Member deleted'));
			$this->redirect($redirect_path);
		}
		$this->Session->setFlash(__('Member was not deleted'));
		$this->redirect($redirect_path);
	}
	
	public function getRedirectPath($url) {
	  if (!empty($this->request->data['tour_id'])) {
	    return CoreUtils::getTourUrl($this->request->data['tour_id'], $url);
	  }else {
	    return array($url);
	  }
	}
}
