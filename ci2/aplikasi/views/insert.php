<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CI Insert Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/users/insert_new_user" >
		<table width="400" border="0" cellpadding="5">
			<tr>
				<th width="213" align="right" scope="row">Enter your username</th>
				<td width="161"><input type="text" name="name" size="20" /></td>
			</tr>
			<tr>
				<th align="right" scope="row">Enter your email</th>
				<td><input type="text" name="email" size="20" /></td>
			</tr>
			<tr>
				<th align="right" scope="row">Enter your Mobile</th>
				<td><input type="text" name="mobile" size="20" /></td>
			</tr>
			<tr>
				<th align="right" scope="row">Enter Your Address</th>
				<td><textarea name="address" rows="5" cols="20"></textarea></td>
			</tr>
			<tr>
				<th align="right" scope="row">&nbsp;</th>
				<td><input type="submit" name="submit" value="Send" /></td>
			</tr>
		</table>

	</form>
</body>
</html>