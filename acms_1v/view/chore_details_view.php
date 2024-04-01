<?php
    // Include the function file to display all assignments
    include '../functions/chore_details_fxn.php';

    // Include the core file for session management
    include '../settings/core.php';

    // Check if user is logged in
    if(!isLoggedIn()){
        // Redirect to login page if not logged in
        header("Location: ../Login/login_view.php");
        exit();
    }

    // Include the connection file
    include '../settings/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Chores Page</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: slategray;
            font-family: Times New Roman, san-serif;
        }

        body {
            font-family: Times New Roman;
            margin: 0;
            padding: 20px;
            background-color: slategray;
        }

        h1, h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="date"] {
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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            text-align: center;
        }

        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            select, input[type="date"] {
                width: 100%;
            }
        }

    </style>
</head>
<body>
   

    <br>
    <!-- Assigned Chores Table -->
    <h2 style="color:crimson; text-align:center;"><strong>All Assigned Chores</bold></h2>
    <table id="assignedChoresTable">
        <thead>
            <tr>
                
            </tr>
        </thead>
        <tbody>
            <?php display_all_assignments(); ?>
        </tbody>
    </table>

     <div>
	<a href="home_view.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'></i></button></strong></span>
	</a>
    </div>
</body>
</html>
