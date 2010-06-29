<?php
/* User Fixture generated on: 2010-06-29 16:06:06 : 1277828526 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'length' => 50, 'key' => 'unique'),
		'passwd' => array('type' => 'string', 'null' => false, 'length' => 32),
		'name' => array('type' => 'string', 'null' => false, 'length' => 50),
		'email' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index'),
		'last_visit' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'index'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 1), 'email' => array('column' => array('email', 'username'), 'unique' => 1), 'group_id' => array('column' => 'group_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'passwd' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'last_visit' => '2010-06-29 16:22:06',
			'group_id' => 1,
			'active' => 1,
			'created' => '2010-06-29 16:22:06',
			'modified' => '2010-06-29 16:22:06'
		),
	);
}
?>