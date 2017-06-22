<?php
	function StringPalindrom($string)
	{
		$revString=strrev($string);
		$revString=str_replace(' ','',$revString);
		$string=str_replace(' ','',$string);
		if ($string==$revString) {
			echo "given string is palindrome\n";
		}
		else
			echo "given string is not palindrome\n";
	}
	$string=readline("enter a string:");
	StringPalindrom($string);

 ?>