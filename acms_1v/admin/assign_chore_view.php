<?php
    // Include the function file to display all assignments
    include '../functions/get_all_assignment_fxn.php';

    // Include the core file for session management
    include '../settings/core.php';

    // Check if user is logged in
    if(!isLoggedIn()){
        // Redirect to login page if not logged in
        header("Location: ../Login/login.php");
        exit();
    }

    // Include the connection file
    include '../settings/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Assignment Page</title>
    <link rel="stylesheet" href="../css/assign_chore_view.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <h1>Assign Chore</h1>
    <form action="../action/assign_a_chore_action.php"  method="POST" name="choreAssignmentForm" id="choreAssignmentForm">
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
        </select><br><br>

        <label for="date_due">Due Date:</label>
        <input type="date" name="date_due" id="date_due" required>

        <button type="submit" name="assignButton" id="assignButton">Assign Chore</button>
    </form>
    <br>
    <div><h2 style="color:brown; text-align:center"><strong>Assigned Chores List</bold><hr></h2></div>
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
	<a href="adminDashBoard.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'></i></button></strong></span>
	</a>
    </div>
</body>

</html>