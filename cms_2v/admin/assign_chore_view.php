<?php
    // Include the function file to display all assignments
    include '../functions/get_all_assignment_fxn.php';

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
    <title>Chore Assignment</title>
    <link rel="stylesheet" href="../css/assign_chore_view.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Chore Assignment</h1>

    <!-- Chore Assignment Form -->
    <form action="../action/assign_a_chore_action.php" method="POST" id="choreAssignmentForm">
        <label for="assignChore">Assign Chore:</label>
        <select name="assignChore" id="assignChore" required>
            <!-- Options for dynamically populated chore list -->
            <?php
            // Include the function file to fetch chore options
            include '../functions/select_role_fxn.php';

            // Fetch and display chore options
            $query = "SELECT * FROM chores";
            $result = mysqli_query($conn, $query);

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['cid']."'>".$row['chorename']."</option>";
                }
            }
            ?>
        </select>
        <br>
        <br>
        <label for="dueDate">Due Date:</label>
        <input type="date" name="date_due" id="date_due style="color:green" required>
        <button type="submit" name="assignBtn" id="assignBtn">Assign Chore</button>
    </form>
    <br>
    <!-- Assigned Chores Table -->
    <h2 style="color:crimson"><strong>All Assigned Chores</bold></h2>
    <table id="assignedChoresTable">
        <thead>
            <tr>
                <th>Chore name</th>
                <th>Person assigned</th>
                <th>Date assigned</th>
                <th>Due date</th>
                <th>Chore status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php display_all_assignments(); ?>
        </tbody>
    </table>

     <div>
	<a href="adminPage.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back to DashBoard</i></button></strong></span>
	</a>
    </div>
</body>
</html>
