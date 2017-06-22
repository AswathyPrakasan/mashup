<?php
	function Factorial($number)
	{
		$factorial=1;
		for ($i=1; $i <=$number ; $i++) { 
			$factorial=$factorial*$i;
		}
		return $factorial;
	}
	$number=readline("enter number:");
	echo Factorial($number)."\n";
?>