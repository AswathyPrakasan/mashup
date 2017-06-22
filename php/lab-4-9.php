<?php
	$string1 = 'football';
	$string2 = 'footboll';
	$position = strspn($string1 ^ $string2, "\0"); 
	echo "First difference between two strings at position".$position.":\"".$string1[$position]."\" Vs \"".$string2[$position]."\"\n";
 ?>