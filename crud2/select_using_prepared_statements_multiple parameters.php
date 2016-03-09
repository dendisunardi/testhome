<?php

//include database configuration file
include("config.php");

$search_ID = 1; 
$search_product = "PD1001"; 

$query = "SELECT id, product_code, product_desc, price FROM products WHERE ID=? AND product_code=?";
$statement = $mysqli->prepare($query);
$statement->bind_param('is', $search_ID, $search_product);
$statement->execute();
$statement->bind_result($id, $product_code, $product_desc, $price);

print '<h3>Select prepared query with multiple parameters:</h3>';
print '<table border="1">';
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