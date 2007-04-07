<?php 

loadModel('CentroCusto');

class CentroCustoTestCase extends UnitTestCase {
	var $object = null;

	function setUp() {
		$this->object = new CentroCusto();
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