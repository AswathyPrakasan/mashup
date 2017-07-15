<?php
	$email = "test@.comtest";
	$checkString=".com";
	$position=strrpos($email,$checkString);
	$subString=substr($email,$position);
	if(strcmp($checkString,$subString)==0)
		echo "string ends with .com";
	else
		echo "string not ends with .com";
	echo "\n";
	
?>