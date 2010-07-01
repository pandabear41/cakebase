<?php
/* ProfilesFields Test cases generated on: 2010-07-01 06:07:11 : 1277965091*/
App::import('Controller', 'ProfilesFields');

class TestProfilesFieldsController extends ProfilesFieldsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProfilesFieldsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.profiles_field');

	function startTest() {
		$this->ProfilesFields =& new TestProfilesFieldsController();
		$this->ProfilesFields->constructClasses();
	}

	function endTest() {
		unset($this->ProfilesFields);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>