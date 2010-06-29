<?php
/* User Fixture generated on: 2010-06-29 17:06:50 : 1277832290 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'unique'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'key' => 'unique'),
		'emailcheckcode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128),
		'passwordchangecode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128),
		'disable' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'lastvisit' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'expire_account' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 1), 'email' => array('column' => 'email', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'emailcheckcode' => 'Lorem ipsum dolor sit amet',
			'passwordchangecode' => 'Lorem ipsum dolor sit amet',
			'disable' => 1,
			'lastvisit' => '2010-06-29 17:24:50',
			'expire_account' => '2010-06-29',
			'created' => '2010-06-29 17:24:50',
			'updated' => '2010-06-29 17:24:50'
		),
	);
}
?>