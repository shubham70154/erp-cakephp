<?php 

loadModel('Categoria');

class CategoriaTestCase extends UnitTestCase {
	var $object = null;

	function setUp() {
		$this->object = new Categoria();
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