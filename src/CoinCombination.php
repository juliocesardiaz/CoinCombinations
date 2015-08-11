<?php
	class CoinCombination
	{
		function makeChange($amount)
		{
			$quarters = 0;
			$dimes = 0;
			$nickels = 0;
			$pennies = 0;
			
			$quarters = (int) ($amount/25);
			$amount = $amount % 25;
			$dimes = (int) ($amount/10);
			$amount = $amount % 10;
			$nickels = (int) ($amount/5);
			$amount = $amount % 5;
			$pennies = (int) ($amount/1);
			
			return "Quarters: " . $quarters . " Dimes: " . $dimes . " Nickels: " . $nickels . " Pennies: " . $pennies;
			
		}
	}	
?>