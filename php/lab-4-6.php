<?php
	$string='www.example.com/public_html/index.php';
	$fileName=substr(strrchr($string,'/'),1);
	echo $fileName."\n";
 ?>