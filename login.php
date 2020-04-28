<?php
include_once 'DBConnector.php';
include_once'user.php';

$con = new DBConnector;
if(isset($_POST['btn-login'])){
	$username =$_POST['username'];
	$password =$_POST['password'];
	$instance = User ::create();
	$instance ->setPassword($password);
	$instance->setUsername($username);

	if($instance->IsPasswordCorrect()){
		$instance->login();
		$con->closeDatabase();
		$instance->createUserSession();
	}else{
		$con->closeDatabase();
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Title Goes Here</title>
	<script type="text/javascript" src="validate.js"></script>
	<link rel="stylesheet" type="text/css" href="validate.css">
</head>
<body>
<form method="post" name="user_details" id="user_details"onsubmit="return validateForm()" action="<?= $_server['PHP_SELF']?>">
		<table align="centre">
			<tr>
				<td><input type="text" name="username"required placeholder="Username"></td>
			</tr>
			<tr>
				<td><input type="text" name="password"required placeholder="Password"></td>
			</tr>
			tr>
				<td><button type="submit" name="btn-login"><strong>LOGIN</strong>></button> </td>
			</tr>

		</table>
	</form>	
</body>
</html>