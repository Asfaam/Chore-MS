<?php
// Start session
session_start();

// Function to check for login
function check_login(){
    if(!isset($_SESSION['user_id'])){
        header("Location: ../view/register.php");
        die();
    }
}
?>
