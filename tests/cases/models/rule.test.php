<?php
/* Rule Test cases generated on: 2010-06-29 17:06:52 : 1277832412*/
App::import('Model', 'Rule');

class RuleTestCase extends CakeTestCase {
	var $fixtures = array('app.rule', 'app.group', 'app.user', 'app.groups_user');

	function startTest() {
		$this->Rule =& ClassRegistry::init('Rule');
	}

	function endTest() {
		unset($this->Rule);
		ClassRegistry::flush();
	}

}
?>