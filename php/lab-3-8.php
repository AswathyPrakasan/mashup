<?php
	function Prime($number)
	{
		$flag=0;
		for ($i=2; $i <$number ; $i++) { 
			if($number%$i == 0){
				$flag=1;
			}
		}
		if ($flag==0) {
			echo "number is prime \n";
		}
		else
			echo "number is not prime \n";		
	}
	$number=readline("enter number:");
	Prime($number);
?>