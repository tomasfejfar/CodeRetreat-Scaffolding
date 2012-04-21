<?php
require_once 'PHPUnit/Framework/TestCase.php';
require_once 'index.php';
class MainTest extends PHPUnit_Framework_TestCase
{
	public function testEmptyTest()
	{
		$this->assertTrue(true);
	}
}