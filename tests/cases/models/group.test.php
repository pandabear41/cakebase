<?php
/* Group Test cases generated on: 2010-06-29 17:06:51 : 1277832351*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.rule', 'app.user', 'app.groups_user');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
?>