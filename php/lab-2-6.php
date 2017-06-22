<?php
	$filename = 'my_upgrade(1).zip';
	$match = 'my_upgrade'; 
	if(strpos($filename,$match)==0){
		echo "match found\n";
		exit;
	}
	else{
		echo "match not found";
	}
 ?>