<?php
// error_reporting(0);
require 'db/connect.php';
// echo "success";

// //querying READ DATA
// if($res = $db->query("SELECT * FROM people")){
// 	if($count = $res->num_rows){
// 		echo '<p>', $count, '</p>';	
		
// 		while($row = $res->fetch_object()){
// 			echo $row->first_name,' ',$row->last_name,'<br/>';
// 		}

// 		$res->free();
// 	}
// }

// //querying UPDATE DATA
// if($update = $db->query("UPDATE people SET created = CURRENT_TIMESTAMP WHERE people_id=1")) {
// 		echo $db->affected_rows;
// 	}

// //queryying DELETE DATA
// if($delete = $db->query("DELETE FROM people where people_id=3")){
// 	echo $db->affected_rows;
// }


// //firstmethod insert data
// $first_name= 'Donny';
// $last_name='Suchari';

// //querying INSERT DATA
// if($put = $db->query("INSERT INTO people (first_name, last_name, bio) values ('{$first_name}', '{$last_name}','I\'am a student')")){
// 	echo $db->affected_rows;
// }

// // second method insert data API format
// if(isset($_GET['first_name'])){
// 	$first_name = $db->real_escape_string(trim($_GET['first_name']));

// 	if($put = $db->query("INSERT INTO people (first_name, last_name, bio) values ('{$first_name}', 'Sunardi','I\'am a student')")){
// 			echo $db->affected_rows;
// 		}

// }



//	// Binding Data
// if(isset($_GET['last_name'], $_GET['person_id'])){
// 	$last_name = trim($_GET['last_name']);
// 	$id = trim($_GET['person_id']);

// 	$people = $db->prepare("SELECT first_name, last_name FROM people WHERE last_name = ? OR people_id = ?");
// 	$people->bind_param('si', $last_name, $id);
// 	$people->execute();

// 	$people->bind_result($first_name, $last_name);

// 	while($people->fetch()){
// 		echo $first_name,' ',$last_name, '<br>';
// 	}
// }

?>