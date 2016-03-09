<?php

//include database configuration file
include("config.php");

$search_product = "PD1001"; //product id

//create a prepared statement
$query = "SELECT id, product_code, product_desc, price FROM products WHERE product_code=?";
$statement = $mysqli->prepare($query);

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('s', $search_product);

//execute query
$statement->execute();

//bind result variables
$statement->bind_result($id, $product_code, $product_desc, $price);

print '<h3>SELECT Using Prepared Statements</h3>';

print '<table border="1">';

//fetch records
while($statement->fetch()) {
    print '<tr>';
    print '<td>'.$id.'</td>';
    print '<td>'.$product_code.'</td>';
    print '<td>'.$product_desc.'</td>';
    print '<td>'.$price.'</td>';
    print '</tr>';

}   
print '</table>';

//close connection
$statement->close();