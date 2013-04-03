<?php 
class AppSchema extends CakeSchema {

	public $file = 'schema_1.php';
  
	var $costs = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
	  'amount' => array('type' => 'integer', 'null' => false, 'default' => null),
	  'description' => array('type' => 'text', 'null' => true, 'default' => null),
		'tour_id'     => array('type' => 'integer', 'null' => false, 'default' => null),
		'created'     => array('type' => 'datetime'),
		'modified'     => array('type' => 'datetime'),
	);
	
	var $deposits = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
	  'amount' => array('type' => 'integer', 'null' => false, 'default' => null),
	  'description' => array('type' => 'text', 'null' => true, 'default' => null),
		'tour_id'     => array('type' => 'integer', 'null' => false, 'default' => null),
		'member_id'   => array('type' => 'integer', 'null' => false, 'default' => null),
		'created'     => array('type' => 'datetime'),
		'modified'     => array('type' => 'datetime'),
	);
}
