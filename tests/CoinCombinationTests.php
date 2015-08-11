<?php 
	require_once "src/CoinCombination.php";
	
	class CoinCombinationTests extends PHPUnit_Framework_TestCase
	{
		//test first spec
		function testOneCent()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 1;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("One penny");			
		}
	}
?>