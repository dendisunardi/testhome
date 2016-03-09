<?php
// establishing the MySQLi connection
$con = new mysqli("localhost","root","","users");
if ($con->connect_errno){
	die('MySQLi Connection was not established');
}

// checking the user
if(isset($_POST['login'])){
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);
	$sel_user = "select * from users where user_email='$email' AND user_pass='$pass'";
	$res = $con->$sel_user;
	if($res->num_rows){
		$_SESSION['user_email']=$email;
		echo "<script>window.open('home.php','_self')</script>";
	}
	else {
		echo "<script>alert('Email or password is not correct, try again!')</script>";
	}
}
?>