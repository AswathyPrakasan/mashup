<?php   
	session_start(); 
	if (($_SESSION['user'])===true) {
		header("Location:phpsessiondisplaypage.php");
		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	
	
	if ($_POST){
		$username=$_POST['userName'];
		$password=$_POST['password'];
		
		if($username=='user'&&$password=='password'){
			$_SESSION['user']=TRUE;
			header("Location:phpsessiondisplaypage.php");
		}
	}
	else{ ?>
		<form action="" method="POST">
			User Name:<input type="text" name="userName" placeholder="user name-user"> <br>
			Email Id:<input type="text" name="password" placeholder="password-password"><br>
			<input type="Submit" value="login" name="user">
		</form>
	<?php }
	
?>
	

</body>
</html>