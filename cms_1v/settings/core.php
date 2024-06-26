<?php
// core.php

// Start session
session_start();

// Function to check for login
function isLoggedIn(){
    return isset($_SESSION['user_id']);
}

// Function to get the user's role ID
function getUserRoleID() {
    if (isset($_SESSION['role_id'])) {
        return $_SESSION['role_id'];
    } else {
        return false;
    }
}

// Check if the user is logged in, else redirect to login page
if(!isLoggedIn()){
    header("Location: ../Login/register_view.php");
    die();
}

// Check if there is an error message set in the session
if(isset($_SESSION['assign_error'])) {
    // Display the error message
    echo "<h2 style='color: red; text-align: center; font-family: Times New Roman'>".$_SESSION['assign_error']."</h2>";

    // Unset the session variable to clear the message
    unset($_SESSION['assign_error']);
}
?>

