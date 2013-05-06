<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 * @property User $User
 * @property Tour $Tour
 */
class Member extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tour' => array(
			'className' => 'Tour',
			'joinTable' => 'members_tours',
			'foreignKey' => 'member_id',
			'associationForeignKey' => 'tour_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
	public function beforeFind($queryData) {
	  $queryData['conditions'][] = array('Member.user_id' => $this->getLoggedInUid());
	  return $queryData;
	}

}
