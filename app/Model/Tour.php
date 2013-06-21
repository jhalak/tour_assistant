<?php
App::uses('AppModel', 'Model');
/**
 * Tour Model
 *
 * @property User $User
 * @property Member $Member
 */
class Tour extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


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
		'Member' => array(
			'className' => 'Member',
			'joinTable' => 'members_tours',
			'foreignKey' => 'tour_id',
			'associationForeignKey' => 'member_id',
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
	  $queryData['conditions'][] = array('Tour.user_id' => $this->getLoggedInUid());
	  return $queryData;
	}

  public function getAllMembers($tid) {
    $res = $this->query(
      '
        SELECT member.name, SUM(d.amount) AS amount FROM members_tours mt
        INNER JOIN members member ON member.id = mt.member_id
        LEFT JOIN deposits d ON d.member_id = mt.member_id
        WHERE mt.tour_id = ' . $tid . '
        GROUP BY mt.id
      '
    );
    return $res;
  }

  public $validate = array(
    'name' => array(
      'notempty' => array(
        'rule' => 'notempty',
        'message' => 'You must enter a tour name'
      ),
    ),
  );
}
