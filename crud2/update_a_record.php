<?php

//include database configuration file
include("config.php");

$product_name = '52 inch TV';
$product_code = '9879798';
$find_id = 1;

$statement = $mysqli->prepare("UPDATE products SET product_name=?, product_code=? WHERE ID=?");

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssi', $product_name, $product_code, $find_id);
$results =  $statement->execute();
if($results){
    print 'Success! record updated'; 
}else{
    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
}