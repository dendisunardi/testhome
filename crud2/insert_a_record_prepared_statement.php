<?php

//include database configuration file
include("config.php");

//values to be inserted in database table
$product_code = 'P1234';
$product_name = '42 inch TV';
$product_price = '600';

$query = "INSERT INTO products (product_code, product_name, price) VALUES(?, ?, ?)";
$statement = $mysqli->prepare($query);
$statement->bind_param('sss', $product_code, $product_name, $product_price);

print '<h3>Insert Multiple Records as Objects</h3>';
if($statement->execute()){
    print 'Success! ID of last inserted record is : ' .$statement->insert_id .'<br />'; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
$statement->close();