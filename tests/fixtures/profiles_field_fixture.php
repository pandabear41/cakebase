<?php
/* ProfilesField Fixture generated on: 2010-07-01 06:07:44 : 1277965064 */
class ProfilesFieldFixture extends CakeTestFixture {
	var $name = 'ProfilesField';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'varname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'field_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'field_size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'field_size_min' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'required' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'match' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'range' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'error_message' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'other_validator' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'default' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'position' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'visible' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'varname' => array('column' => array('varname', 'visible'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'varname' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'field_type' => 'Lorem ipsum dolor sit amet',
			'field_size' => 1,
			'field_size_min' => 1,
			'required' => 1,
			'match' => 'Lorem ipsum dolor sit amet',
			'range' => 'Lorem ipsum dolor sit amet',
			'error_message' => 'Lorem ipsum dolor sit amet',
			'other_validator' => 'Lorem ipsum dolor sit amet',
			'default' => 'Lorem ipsum dolor sit amet',
			'position' => 1,
			'visible' => 1
		),
	);
}
?>