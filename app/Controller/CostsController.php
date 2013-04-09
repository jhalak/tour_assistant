<?php
App::uses('AppController', 'Controller');
/**
 * Costs Controller
 *
 * @property Cost $Cost
 */
class CostsController extends AppController {
  
  public function beforeFilter(){
    parent::assertTourExists();
  }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = array(
		  'conditions' => array('Cost.tour_id' => $this->request->params['tid']),
			'recursive' => 0,
		);
		$costs = $this->paginate('Cost'); 
		$this->set('costs', $costs);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cost->exists($id)) {
			throw new NotFoundException(__('Invalid cost'));
		}
		$options = array('conditions' => array('Cost.' . $this->Cost->primaryKey => $id));
		$this->set('cost', $this->Cost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cost->create();
			if ($this->Cost->save($this->request->data)) {
				$this->Session->setFlash(__('The cost has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cost could not be saved. Please, try again.'));
			}
		}
		$tours = $this->Cost->Tour->find('list');
		$this->set(compact('tours'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cost->exists($id)) {
			throw new NotFoundException(__('Invalid cost'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cost->save($this->request->data)) {
				$this->Session->setFlash(__('The cost has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cost could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cost.' . $this->Cost->primaryKey => $id));
			$this->request->data = $this->Cost->find('first', $options);
		}
		$tours = $this->Cost->Tour->find('list');
		$this->set(compact('tours'));
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
		$this->Cost->id = $id;
		if (!$this->Cost->exists()) {
			throw new NotFoundException(__('Invalid cost'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cost->delete()) {
			$this->Session->setFlash(__('Cost deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cost was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
