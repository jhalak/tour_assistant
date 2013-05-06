<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
App::import('Vendor', 'Utils/CoreUtils');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  public $theme = "Cakestrap";

  public $components = array(
    'Session',
    'Auth' => array(
      'loginRedirect' => array('controller' => 'tours', 'action' => 'index'),
      'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
    ),
  );

  public function beforeFilter(){
    $this->Auth->allow('index', 'view');
    if (!empty($this->request->params['tid'])) {
      $tid = $this->request->params['tid'];
      
      $this->loadModel('Tour');
      $options = array('conditions' => array('Tour.' . $this->Tour->primaryKey => $tid));
      $tour = $this->Tour->find('first', $options);
      
      $this->set('tid', $tid);
      $this->set('tour', $tour);
    }
    $this->set('auth', $this->Auth);
  }
  
  public function redirect($url) {
    if (!empty($this->request->params['tid'])) {
      $url = CoreUtils::getTourUrl($this->request->params['tid'], $url);
    }
    if (!empty($this->request->data['tour_id'])) {
      $url = CoreUtils::getTourUrl($this->request->data['tour_id'], $url);
    }
    parent::redirect($url);
  }
  
  public function assertTourExists() {
  if (empty($this->request->params['tid'])) {
      $this->Session->setFlash(__('Please select a tour'));
      $this->redirect('/tours');
    }else {
      self::beforeFilter();
    }
  }
}
