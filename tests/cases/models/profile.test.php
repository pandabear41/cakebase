<?php
/* Profile Test cases generated on: 2010-07-01 06:07:33 : 1277965053*/
App::import('Model', 'Profile');

class ProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.profile', 'app.user', 'app.group', 'app.rule', 'app.groups_user');

	function startTest() {
		$this->Profile =& ClassRegistry::init('Profile');
	}

	function endTest() {
		unset($this->Profile);
		ClassRegistry::flush();
	}

}
?>