<?php
/* Permission Test cases generated on: 2010-06-29 16:06:37 : 1277828617*/
App::import('Model', 'Permission');

class PermissionTestCase extends CakeTestCase {
	var $fixtures = array('app.permission', 'app.group', 'app.user', 'app.groups_permission');

	function startTest() {
		$this->Permission =& ClassRegistry::init('Permission');
	}

	function endTest() {
		unset($this->Permission);
		ClassRegistry::flush();
	}

}
?>