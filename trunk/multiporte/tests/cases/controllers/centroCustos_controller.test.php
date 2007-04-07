<?php 

loadController('CentroCustos');

class CentroCustosControllerTestCase extends UnitTestCase {
	var $object = null;

	function setUp() {
		$this->object = new CentroCustosController();
	}

	function tearDown() {
		unset($this->object);
	}

	/*
	function testMe() {
		$result = $this->object->doSomething();
		$expected = 1;
		$this->assertEqual($result, $expected);
	}
	*/
}
?>