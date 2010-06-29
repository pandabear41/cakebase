<?php
/* Rule Fixture generated on: 2010-06-29 17:06:52 : 1277832412 */
class RuleFixture extends CakeTestFixture {
	var $name = 'Rule';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'order' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'action' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512),
		'forward' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64),
		'message' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'group_id' => 1,
			'order' => 1,
			'action' => 'Lorem ipsum dolor sit amet',
			'forward' => 'Lorem ipsum dolor sit amet',
			'message' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>