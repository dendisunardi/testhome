<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show Users</title>
	<link rel="stylesheet" href="">
</head>
<body>
<h2>Simple CI CRUD Application</h2>

<table width="600px" border="1" cellpadding="5">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">User Name</th>
			<th scope="col">Email</th>
			<th scope="col">Mobile</th>
			<th scope="col">Address</th>
			<th scope="col" colspan="2">Action</th>

		</tr>
	</thead>
	<tbody>
	
	<?php 
		foreach ($user_list as $u_key) { 
	?>
		<tr>
			<td><?php echo $u_key->id; ?></td>
			<td><?php echo $u_key->name; ?></td>
			<td><?php echo $u_key->email; ?></td>
			<td><?php echo $u_key->mobile; ?></td>
			<td><?php echo $u_key->address; ?></td>
			<td width="40" align="left" >
			<a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a>
			</td>
			<td width="40" align="left" >
			<a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete</a>
			</td>
		</tr>
	
	<?php 
		}
	?>
	<tr>
	<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add_form">Insert New User</a></td>
	</tr>
	</tbody>
</table>	
<script type="text/javascript">
function show_confirm(act,gotoid){
	if(act=="edit")
		var r=confirm("Do you really want to update?");
	else
		var r=confirm("Do you really want to delete?");
	if (r=true)
	{
		window.location="<?php echo base_url(); ?>index.php/users/"+act+"/"+gotoid;
	}
}
</script>
</body>
</html>