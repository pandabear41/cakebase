<?php
/* Permissions Test cases generated on: 2010-06-29 16:06:53 : 1277828873*/
App::import('Controller', 'Permissions');

class TestPermissionsController extends PermissionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PermissionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.permission', 'app.group', 'app.user', 'app.groups_permission');

	function startTest() {
		$this->Permissions =& new TestPermissionsController();
		$this->Permissions->constructClasses();
	}

	function endTest() {
		unset($this->Permissions);
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