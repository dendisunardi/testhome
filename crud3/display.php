</strong>

<html>

<head>

	<title>MySQLi Read Records</title>

</head>

<body>

	<?php

//include database connection

	include 'db_connect.php';

//query all records from the database

	$query = "select * from users";

//execute the query

	$result = $mysqli->query( $query );

//get number of rows returned

	$num_results = $result->num_rows;

//this will link us to our add.php to create new record

	echo "<div><a href='add.php'>Create New Record</a></div>";

if( $num_results > 0){ //it means there's already a database record

echo "<table border='1'>";//start table

//creating our table heading

echo "<tr>";

echo "<th>Firstname</th>";

echo "<th>Lastname</th>";

echo "<th>Username</th>";

echo "<th>Action</th>";

echo "</tr>";

//loop to show each records

while( $row = $result->fetch_assoc() ){

//extract row

//this will make $row['firstname'] to

//just $firstname only

	extract($row);

//creating new table row per record

	echo "<tr>";

	echo "<td>{$firstname}</td>";

	echo "<td>{$lastname}</td>";

	echo "<td>{$username}</td>";

	echo "<td>";

//just preparing the edit link to edit the record

	echo "<a href='edit.php?id={$id}'>Edit</a>";

	echo " / ";

//just preparing the delete link to delete the record

	echo "<a href='#' onclick='delete_user( {$id} );'>Delete</a>";

	echo "</td>";

	echo "</tr>";

}

echo "</table>";//end table

}else{

//if database table is empty

	echo "No records found.";

}

//disconnect from database

$result->free();

$mysqli->close();

?>

</body>

</html>
