</strong>

<?php

//include database connection

include 'db_connect.php';

//check any user action

$action = isset( $_POST['action'] ) ? $_POST['action'] : "";

if($action == "update"){ //if the user hit the submit button

//write our update query

//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection

	$query = "update users

	set

	firstname = '".$mysqli->real_escape_string($_POST['firstname'])."',

	lastname = '".$mysqli->real_escape_string($_POST['lastname'])."',

	username = '".$mysqli->real_escape_string($_POST['username'])."',

	password  = '".$mysqli->real_escape_string($_POST['password'])."'

	where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

//execute the query

	if( $mysqli->query($query) ) {

//if updating the record was successful

		echo "User was updated.";

	}else{

//if unable to update new record

		echo "Database Error: Unable to update record.";

	}

}

//select the specific database record to update

$query = "select id, firstname, lastname, username, password

from users

where id='".$mysqli->real_escape_string($_REQUEST['id'])."'

limit 0,1";

//execute the query

$result = $mysqli->query( $query );

//get the result

$row = $result->fetch_assoc();

//assign the result to certain variable so our html form will be filled up with values

$id = $row['id'];

$firstname = $row['firstname'];

$lastname = $row['lastname'];

$username = $row['username'];

$password = $row['password'];

?>

<!--we have our html form here where new user information will be entered-->

<form action='#' method='post' border='0'>

	<table>

		<tr>

			<td>Firstname</td>

			<td><input type='text' name='firstname' value='<?php echo $firstname;  ?>' /></td>

		</tr>

		<tr>

			<td>Lastname</td>

			<td><input type='text' name='lastname' value='<?php echo $lastname;  ?>' /></td>

		</tr>

		<tr>

			<td>Username</td>

			<td><input type='text' name='username'  value='<?php echo $username;  ?>' /></td>

		</tr>

		<tr>

			<td>Password</td>

			<td><input type='password' name='password'  value='<?php echo $password;  ?>' /></td>

			<tr>

				<td></td>

				<td>

					<!-- so that we could identify what record is to be updated -->

					<input type='hidden' name='id' value='<?php echo $id ?>' />

					<!-- we will set the action to update -->

					<input type='hidden' name='action' value='update' />

					<input type='submit' value='Edit' />

					<a href='display.php'>Back to display page</a>

				</td>

			</tr>

		</table>

	</form>