<?php

//include database configuration file
include("config.php");



$product_name = '52 inch TV';
$product_code = '9879798';
$find_id = 24;

$query = "UPDATE products SET product_name=?, product_code=? WHERE ID=?";
$statement = $mysqli->prepare($query);

$statement->bind_param('ssi', $product_name, $product_code, $find_id);

print '<h3>Update a Record - prepared statement</h3>';
if($statement->execute()){
    print 'Success! ID of last inserted record is : ' .$statement->insert_id .'<br />'; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}