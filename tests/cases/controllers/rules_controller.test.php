<?php
/* Rules Test cases generated on: 2010-06-29 17:06:27 : 1277833647*/
App::import('Controller', 'Rules');

class TestRulesController extends RulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RulesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rule', 'app.group', 'app.user', 'app.groups_user');

	function startTest() {
		$this->Rules =& new TestRulesController();
		$this->Rules->constructClasses();
	}

	function endTest() {
		unset($this->Rules);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>