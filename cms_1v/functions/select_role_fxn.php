<?php
// Include the connection file
include '../settings/connection.php';

// Write SELECT query on the "family_name" table
$query = "SELECT * FROM family_name";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if execution worked
if($result === false){
    die("ERROR: Could not execute $query. " . mysqli_error($conn));
}
?>
