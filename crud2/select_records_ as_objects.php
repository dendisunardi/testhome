<?php

//include database configuration file
include("config.php");

//MySqli Select Query
$results = $mysqli->query("SELECT id, product_code, product_name, product_desc, price FROM products");

//output results
print '<h3>SELECT Multiple Records as Objects</h3>';

print '<table border="1">';
while($row = $results->fetch_object()) {
    print '<tr>';
    print '<td>'.$row->id.'</td>';
    print '<td>'.$row->product_code.'</td>';
    print '<td>'.$row->product_name.'</td>';
    print '<td>'.$row->product_desc.'</td>';
    print '<td>'.$row->price.'</td>';
    print '</tr>';
}  
print '</table>';

// Frees the memory associated with a result
$results->close();
