<?php
    // Include the function file to display all assignments
    include '../functions/chore_details_fxn.php';

    // Include the core file for session management
    include '../settings/core.php';

    // Check if user is logged in
    if(!isLoggedIn()){
        // Redirect to login page if not logged in
        header("Location: ../Login/register_view.php");
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
    <title>Chore-MS|Assigned-Chores</title>
    <link rel="stylesheet" href="../css/chore_details_view.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: beige;
            font-family: Goudy Old Style;
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
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back </i></button></strong></span>
	</a>
    </div>
</body>
</html>
