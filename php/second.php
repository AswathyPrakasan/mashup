<?php
//control flow
/*$x=readline("enter name of fruit:");
if ($x=="apple") {
	echo "i like apple";
	# code...
}
elseif ($x=="orange") {
	echo "i like orange";
	# code...
}
else{
	echo "i like $x";
}*/
$x=readline("enter first number:");
$y=readline("enter second number:");
$z=readline("enter an operator:");
switch ($z) {
	case '+':
		echo $x+$y;
		# code...
		break;
	case '-':
		echo $x-$y;
		# code...
		break;
	case '*':
		echo $x*$y;
		# code...
		break;
	
	default:
	    echo "enter a valid operator";
		# code...
		break;
}while($z!=0);





?>