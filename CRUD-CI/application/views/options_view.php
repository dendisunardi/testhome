<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Options</title>
	<link rel="stylesheet" href="">
	<style>
	label {
		display: block;
	}
	</style>
</head>
<body>
	<h2>Create</h2>

	<?php echo form_open('site/create') ?>

	<p>
	<label for="title">Title</label><input type="text" name="title" >
	</p>
	<p>
	<label for="content">Content</label><textarea type="text" name="content" ></textarea>
	</p>
	<p>
	<input type="submit" value="Submit" >
	</p>
	<?php echo form_close(); ?>

	<hr/>
	<h2>Read</h2>
	<?php if(isset($records)) : foreach($records as $row): ?>
	<h2><?php echo anchor("site/delete/$row->id", $row->title); ?></h2>
	<div><?php echo $row->content; ?></div>
	<?php endforeach; ?>
	<?php else : ?>
	<h2>No records are returned.</h2>
	<?php endif; ?>

	<hr/>
	<h2>Delete</h2>
	<p>To simple delete method, simple click on one of title.</p>

</body>
</html>