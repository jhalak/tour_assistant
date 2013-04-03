<?php
App::uses('AppModel', 'Model');
/**
 * Deposit Model
 *
 * @property Tour $Tour
 * @property Member $Member
 */
class Deposit extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'amount';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tour' => array(
			'className' => 'Tour',
			'foreignKey' => 'tour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'member_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
