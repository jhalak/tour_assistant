<?php
App::uses('AppModel', 'Model');
/**
 * Cost Model
 *
 * @property Tour $Tour
 */
class Cost extends AppModel {

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
		)
	);

  public $validate = array(
    'amount' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Amount can\'t be empty',
      ),
    ),
  );
}
