<?php
	$text = "Word wrap will split this text up into smaller lines, which makes for easier reading andneater layout.";
	echo(wordwrap($text,20,"\n"));
?>