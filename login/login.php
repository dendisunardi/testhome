<!DOCTYPE html><?php session_start();?>
<html>
<head>
	<title>User Login</title>
</head>
<body>

<?php
require 'db.php';
// establishing the MySQLi connection
require 'security.php';


// checking the user
// checking the user
if(isset($_POST['login'])){
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);
	$sel_user = "select * from users where user_email='$email' AND user_pass='$pass'";
	$res = $con->query($sel_user);
	if($res->num_rows){
		$_SESSION['user_email']=$email;
		echo "<script>window.open('home.php','_self')</script>";
	}
	else {
		echo "<script>alert('Email or password is not correct, try again!')</script>";
	}
	$res->free();
}
?>

	<form action="login.php" method="post">
		<table width="500px" align="center" bgcolor="skyblue">
			<tr align="center">
				<td colspan="3"><h2>User Login</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Email</b></td>
				<td><input type="text" name="email" required="required"/></td>
			</tr>
			<tr>
				<td align="right"><b>Password:</b></td>
				<td><input type="password" name="pass" required="required"></td>
			</tr>
			<tr align="center">
				<td colspan="3">
				<input type="submit" name="login" value="LOGIN" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>