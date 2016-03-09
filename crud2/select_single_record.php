<?php

//include database configuration file
include("config.php");

print '<h3>Select Single Record</h3>';
//chained PHP functions
$product_name = $mysqli->query("SELECT product_name FROM products WHERE id = 1")->fetch_object()->product_name; 
print $product_name; //output value

$mysqli->close();
