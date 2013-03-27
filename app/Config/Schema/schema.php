<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}
	
	var $users = array(
  	'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
  	'name' => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
	);
	
	var $tours = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
		'description' => array('type' => 'text', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
	);
	
	var $members = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
	  'name' => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
	);
	
	var $members_tours = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'mamber_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tour_id' => array('type' => 'integer', 'null' => false, 'default' => null),
	);
}
