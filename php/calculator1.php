<?php
	$first = $_POST['firstNumber'] + 0;//a small "hack" to make sure its an int but allow negs!!
	$second= $_POST['secondNumber'] + 0;
	$operator = $_POST["operator"];
	switch($operator)
		{
    		case "+":	$result=$first + $second;
    				 	break; 
    		case "-":	$result=$first - $second;
    					break;
    		case "*":	$result=$first * $second;
    					break; 
    		case "/":	$result=$first / $second;
    					break;
       		case "%":	$result=$first % $second;
    					break;
    	}
    	
    	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<style type="text/css">
		.form-style{
			padding-bottom: 20px;
			padding-top: 20px;
			border: 2px solid red;
			margin-left:100px;
			margin-right:80px;

		}
		.col-style{
			padding-top:100px;
			color: white;
		}
		body{
			background-image: url(https://t4.ftcdn.net/jpg/01/62/17/77/500_F_162177798_cXOBWTtcT4YrXw0HCcPIV6BxRP5z16xT.jpg);
			background-size: 100% 300%;
    background-repeat: no-repeat;
		}
		span{
			float: left;
			padding-left:130px;
		}
		input[type=submit] {
  			height:40px;
  			width: 40px;
  			color: black;
		}
		input[type=text] {
			color: black;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 col-style" align="center" >
				<div>
					<h1 style="color: black">Calculator</h1>
				</div>
				<div >
					<form method="POST" action="" class="form-style">
						<input type="text" name="firstNumber" value="<?php echo $first ?>" placeholder="first number"> <br><br>
						<input type="text" name="secondNumber" value="<?php echo $second ?>" placeholder="second number"><br><br>
						<input type="text" name="result" value="<?php echo $result ?>" placeholder="result"> <br><br>
						<input type="Submit" value="%" name="operator">
						<input type="Submit" value="+" name="operator">
						<input type="Submit" value="-" name="operator">
						<input type="Submit" value="*" name="operator">
						<input type="Submit" value="/" name="operator">

					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>