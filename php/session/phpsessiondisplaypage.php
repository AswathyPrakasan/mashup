<?php 
     session_start();
	if ($_SESSION['user']===true){ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
 	
logged in..


</body>
</html>
<?php }
else{
	echo "not logged in";
}
?>