<?php 
$number=121222;
$rev=0;
$temp=$number;
while($temp!=0){
	$rev=$rev*10+$temp%10;
	$temp=(int)($temp/10);
}
echo $rev;
 ?>