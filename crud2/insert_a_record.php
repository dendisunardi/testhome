<?php

//include database configuration file
include("config.php");

//values to be inserted in database table
$product_code = '"'.$mysqli->real_escape_string('P1234').'"';
$product_name = '"'.$mysqli->real_escape_string('42 inch TV').'"';
$product_price = '"'.$mysqli->real_escape_string('600').'"';

//MySqli Insert Query
$insert_row = $mysqli->query("INSERT INTO products (product_code, product_name, price) VALUES($product_code, $product_name, $product_price)");


print '<h3>Insert a record</h3>';

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />'; 
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
