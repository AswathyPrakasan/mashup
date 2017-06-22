<?php
	$character=readline("enter character:");
	$nextCharacter =++$character;
	if(strlen($nextCharacter)>1){
			$nextCharacter=$nextCharacter[0];
		}
	echo "next character:".$nextCharacter."\n";
 ?>