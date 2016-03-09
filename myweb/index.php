<?php
error_reporting(0);
require 'db/connect.php';
require 'functions/security.php';

$records = array();

if(!empty($_POST)){
	if(isset($_POST['first_name'], $_POST['last_name'], $_POST['bio'])){
		$first_name = trim($_POST['first_name']);
		$last_name = trim($_POST['last_name']);
		$bio = trim($_POST['bio']);

		if(!empty($first_name) &&!empty($last_name) && !empty($bio)) {
			$insert = $db->prepare("INSERT INTO people(first_name, last_name, bio) values(?, ?, ?)");
			$insert->bind_param('sss', $first_name, $last_name, $bio);

			if($insert->execute()){
				header('location: index.php');
				die();
			}
		}
	}
}

if($res = $db->query("SELECT people.people_id, people.first_name, people.last_name, people.bio, people.country, people.created, countries.name as country FROM people LEFT JOIN countries ON people.country = countries.countries_id order by people.people_id desc")){
	if($res->num_rows){
		while($row = $res->fetch_object()){
			$records[] = $row;
		}
		$res->free();
	}
}
// echo '<pre>', print_r($records),'</pre>';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CRUD PHP</title>
	</head>
	<style>
	body {
		font-family: sans-serif;
	}
	.field {
		margin-bottom: 7px;
		width: 300px;
	}

	.field label{
		display: block;
		width: 100%;
	}

	.field input[type="text"], .field textarea {
		width: 100%;
	}
	form {
		margin-top: 25px;
	}
	</style>
	<body>
	<h3>People</h3>
	<?php
	if(!count($records)){
		echo 'No records';
	}else{
	?>
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Bio</th>
					<th>Country</th>
					<th>Created</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($records as $row){
				?>
					<tr>
						<td><?php echo escape($row->first_name); ?></td>
						<td><?php echo escape($row->last_name); ?></td>
						<td><?php echo escape($row->bio); ?></td>
						<td><?php echo escape($row->country); ?></td>
						<td><?php echo escape($row->created); ?></td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	<?php
	}
	?>
	<hr>
	<form action="" method="POST">
		<div class="field">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" id="first_name" autocomplete="off">
		</div>

		<div class="field">
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" id="last_name" autocomplete="off">
		</div>

		<div class="field">
			<label for="bio">First Name</label>
			<textarea name="bio" id="bio"></textarea>
		</div>
		<input type="submit" value="SUBMIT">
	</form>
	</body>
</html>