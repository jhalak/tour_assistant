<?php 
class AppSchema extends CakeSchema {

	public $file = 'schema_2.php';

	public $users = array(
		'id'       => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name'     => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email'    => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
    'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
    'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
    'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
    'created'  => array('type' => 'datetime'),
    'modified' => array('type' => 'datetime'),
		'indexes'  => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

  var $groups = array(
    'id'          => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
    'name'        => array('type' => 'string', 'length' => 50, 'null' => false, 'default' => null),
    'created'  => array('type' => 'datetime'),
    'modified' => array('type' => 'datetime'),
  );

}
