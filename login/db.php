<?php
// used to connect to the database
$host = "localhost";
$db_name = "phptest";
$username = "root";
$password = "b3ckm3d14";
 
$con = new mysqli($host, $username, $password, $db_name);
if($con->connect_errno){
	die('sorry we have problem');
}
?>