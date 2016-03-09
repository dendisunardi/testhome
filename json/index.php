<!DOCTYPE html>
<html>
<head>
	<title>Json</title>
</head>
<body>
<?php

//Load the file
$contents = file_get_contents('totalplay.json');

//Decode the JSON data into a PHP array.
$contentsDecoded = json_decode($contents, true);

//Modify the counter variable.
$contentsDecoded['counter']++;

//Encode the array back into a JSON string.
$json = json_encode($contentsDecoded);

//Save the file.
file_put_contents('totalplay.json', $json);
?>
<br>
<input type="text" name="data" placeholder="<?php echo $data ?>">
</body>
</html>