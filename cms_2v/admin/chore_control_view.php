<?php
// chore_control_view.php

// Include core.php to check if the user is logged in
require_once('../settings/core.php');

// Include the chore_fxn.php file
include '../functions/chore_fxn.php';


// Check if the user is not logged in, redirect to login page
if(!isLoggedIn()) {
    // Redirect to the login page
    header("Location: ../Login/register_view.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chore</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            max-width: 100%;
	    background-color: beige;
           
            
        }
            
        h1{
            color: blue;
        }

        h2 {
            color: grey;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 300px;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 99%;
            margin-top: 20px;
        }



        th {
            padding: 5px; /* reduce padding */
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th:first-child {
            width: 33%; /* set a specific width for the first column */
        }

        th:nth-child(2) {
            width: 33%; /* set a specific width for the second column */
        }

        th:last-child {
            width: 33%; /* set a specific width for the third column */
        }

    </style>
    
</head>
<body>
    <h1>Add Chore</h1>
    
    <!-- Chore Form -->
    <form action="../action/add_chore_action.php" method="POST" id="choreForm">
        <label for="choreName">Chore Name:</label>
	<input type="text" name="choreName" id="choreName" placeholder="Enter chore name" required pattern="[A-Z][a-zA-Z\s]*" title="Chore name must start with a capital letter and contain only letters or spaces">
        <button type="submit" name="submit" id="submitBtn">Add Chore</button>
    </form>
    <br>
    <!-- Chore Table -->
    <h2>Chore List</h2>
    <table id="choreTable">
        <thead>
          <tr><th>Chore ID</th><th>Chore Name</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <!-- Call the function to display all chores -->
            <?php display_all_chores(); ?>
        </tbody>
    </table>
    <div>
	<a href="../admin/adminPage.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back to DashBoard</i></button></strong></span>
	</a>
    </div>
</body>
</html>
