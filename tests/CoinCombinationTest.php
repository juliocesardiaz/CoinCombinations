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
		//test second spec
		function testFiveCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 5;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 0 Dimes: 0 Nickels: 1 Pennies: 0", $result);			
		}
		//test third spec
		function testTenCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 10;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 0 Dimes: 1 Nickels: 0 Pennies: 0", $result);			
		}
		//test fourth spec
		function testTwentyfiveCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 25;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 1 Dimes: 0 Nickels: 0 Pennies: 0", $result);			
		}
		//test fifth spec
		function testThirtyCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 30;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 1 Dimes: 0 Nickels: 1 Pennies: 0", $result);			
		}
		//test sixth spec
		function testFortyCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 40;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 1 Dimes: 1 Nickels: 1 Pennies: 0", $result);			
		}
		//test seventh spec
		function testFortyoneCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 41;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 1 Dimes: 1 Nickels: 1 Pennies: 1", $result);			
		}
		//test eigth spec
		function testNinetynineCents()
		{
			//Arrange
			$test = new CoinCombination;
			$change_to_make = 99;
			
			//Act
			$result = $test->makeChange($change_to_make);
			
			//Assert
			$this->assertEquals("Quarters: 3 Dimes: 2 Nickels: 0 Pennies: 4", $result);			
		}
		
	}
?>