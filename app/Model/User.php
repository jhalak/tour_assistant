<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Member $Member
 * @property Tour $Tour
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Tour' => array(
			'className' => 'Tour',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
  
	public function beforeFind($queryData) {
	  if (!$this->isAdmin()) {
  	  $queryData['conditions'][] = array('User.id' => $this->loggedInUid);
	  }
	  return $queryData;
	}
	
	public function isAdmin() {
	  return false;
	}
}
