<?php
/* Profile Fixture generated on: 2010-07-01 06:07:33 : 1277965053 */
class ProfileFixture extends CakeTestFixture {
	var $name = 'Profile';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'lastname' => array('type' => 'string', 'null' => false, 'length' => 50),
		'firstname' => array('type' => 'string', 'null' => false, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'lastname' => 'Lorem ipsum dolor sit amet',
			'firstname' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>