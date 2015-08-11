<?php 
	require_once "src/CoinCombination.php";
	
	class CoinCombinationTest extends PHPUnit_Framework_TestCase
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
			$this->assertEquals("Quarters: 0 Dimes: 0 Nickels: 0 Pennies: 1", $result);			
		}
	}
?>