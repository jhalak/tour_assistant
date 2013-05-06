<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}
	
	var $users = array(
  	'id'          => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
  	'name'        => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
    'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
    'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
    'created'  => array('type' => 'datetime'),
    'modified' => array('type' => 'datetime'),
	);
	
	var $tours = array(
		'id'          => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name'        => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
		'description' => array('type' => 'text', 'null' => true, 'default' => null),
		'user_id'     => array('type' => 'integer', 'null' => false, 'default' => null),
    'created'  => array('type' => 'datetime'),
    'modified' => array('type' => 'datetime'),
	);
	
	var $members = array(
	  'id'          => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
	  'name'        => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
		'user_id'     => array('type' => 'integer', 'null' => false, 'default' => null),
    'created'  => array('type' => 'datetime'),
    'modified' => array('type' => 'datetime'),
	);
	
	var $members_tours = array(
		'id'          => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'member_id'   => array('type' => 'integer', 'null' => false, 'default' => null),
		'tour_id'     => array('type' => 'integer', 'null' => false, 'default' => null),
	);
}
