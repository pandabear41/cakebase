<?php
/* ProfilesField Test cases generated on: 2010-07-01 06:07:44 : 1277965064*/
App::import('Model', 'ProfilesField');

class ProfilesFieldTestCase extends CakeTestCase {
	var $fixtures = array('app.profiles_field');

	function startTest() {
		$this->ProfilesField =& ClassRegistry::init('ProfilesField');
	}

	function endTest() {
		unset($this->ProfilesField);
		ClassRegistry::flush();
	}

}
?>