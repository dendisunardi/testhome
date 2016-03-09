<html>

<head>

	<title>MySQLi Delete Record</title>

</head>

<body>

	<?php

//include database connection

	include 'db_connect.php';

	$action = isset($_GET['action']) ? $_GET['action'] : "";

if($action=='delete'){ //if the user clicked ok, run our delete query

//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection

	$query = "DELETE FROM users WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";

//execute query

	if( $mysqli->query($query) ){

//if successful deletion

		echo "User was deleted.";

	}else{

//if there's a database problem

		echo "Database Error: Unable to delete record.";

	}

}

$query = "select * from users";

$result = $mysqli->query( $query );

$num_results = $result->num_rows;

echo "<div><a href='add.php'>Create New Record</a></div>";

if( $num_results ){

	echo "<table border='1'>";

	echo "<tr>";

	echo "<th>Firstname</th>";

	echo "<th>Lastname</th>";

	echo "<th>Username</th>";

	echo "<th>Action</th>";

	echo "</tr>";

//loop to show each records

	while( $row = $result->fetch_assoc() ){

		extract($row);

		echo "<tr>";

		echo "<td>{$firstname}</td>";

		echo "<td>{$lastname}</td>";

		echo "<td>{$username}</td>";

		echo "<td>";

		echo "<a href='edit.php?id={$id}'>Edit</a>";

		echo " / ";

//on click of our delete link, a pop up will appear.

//it means it run our delete JavaScript

		echo "<a href='#' onclick='delete_user( {$id} );'>Delete</a>";

		echo "</td>";

		echo "</tr>";

	}

	echo "</table>";

}else{

	echo "No records found.";

}

$result->free();

$mysqli->close();

?>

<script type='text/javascript'>

	function delete_user( id ){

//prompt the user

var answer = confirm('Are you sure?');

if ( answer ){ //if user clicked ok

//redirect to url with action as delete and id of the record to be deleted

window.location = 'delete.php?action=delete&amp;id=' + id;

}

}

</script>

</body>

</html>