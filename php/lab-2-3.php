<?php
	$email = "test@test.com";
	$checkString=".com";
	$position=strpos($email,$checkString);
	$subString=substr($email,$position);
	if(strcmp($checkString,$subString)==0)
		echo "string ends with .com";
	else
		echo "string not ends with .com";
	echo "\n";
	
?>