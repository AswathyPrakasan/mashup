<?php 
 for ($i=0; $i <5; $i++) { 
 	for ($j=5; $j>$i; $j--) { 
 		echo " ";
 	}
 	$n=$i+1;
 	for ($k=0; $k <((2*$i+1)/2); $k++) { 
 	 	echo $n++;
 	}
 	$n--;
 	for ($m=((2*$i+1)/2)-1; $m >0 ; $m--) { 
 		echo --$n;
 	}
 	echo "\n";

 	 }
 ?>