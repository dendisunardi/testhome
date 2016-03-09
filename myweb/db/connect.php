<?php
$db = new mysqli('localhost', 'root', 'b3ckm3d14', 'app');
if($db->connect_errno){
	die('sorry we have problem');
}
?>