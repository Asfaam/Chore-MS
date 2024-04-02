<?php
// Include the core file for session management
include '../settings/core.php';

// Check if user is logged in
if(!isLoggedIn()){
    // Redirect to login page if not logged in
    header("Location: ../Login/register_view.php");
    exit();
}


// Check user role
$userRoleID = getUserRoleID();
if ($userRoleID !== false) {
    // Check if the user is  not a super admin
    if ($userRoleID != 1) {
        // Redirect to main dashboard|user homepage for non-admin users
        header("Location: assign_chore_view.php");
        die();
    }
} else {
    // Redirect to login page if user role is not available
    header("Location: ../Login/register_view.php");
    die();
}

// Include the connection file
include '../settings/connection.php';

// Check if assignmentid is provided in the URL
if(isset($_GET['assignmentid'])) {
    // Retrieve assignmentid from the URL query parameters
    $assignmentid = $_GET['assignmentid'];

    // Fetch assignment details from the database
    $query = "SELECT * FROM assignment WHERE assignmentid = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $assignmentid);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if assignment exists
    if($result->num_rows == 1) {
        $assignment = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Chore Status</title>
    <!-- Include any CSS stylesheets or external stylesheets here -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            max-width: 100%;
    	    font-family: Times New Roman;
 	    background-color: beige;   
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
    </style>            
</head>
<body>
    <h1>Update Chore Status</h1>
    <form action="../action/update_assigned_chore_status_action.php" method="POST">
        <input type="hidden" name="assignmentid" value="<?php echo $assignment['assignmentid']; ?>">
        <label for="status">Update Status:</label>
        <select name="status" id="status" required>
            <option value="2">InProgress</option>
            <option value="3">Completed</option>
            <option value="4">Incomplete</option>
        </select>
        <button type="submit" name="updateStatusBtn">Update Status</button>
    </form>
    <div>
	<a href="../admin/assign_chore_view.php">
            <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back </i></button></strong></span>
	</a>
    </div>
</body>
</html>

<?php
    } else {
        // Assignment not found, display an error message
        echo "Assignment not found.";
    }
} else {
    // assignmentid not provided in the URL, redirect back to the assignment view page
    header("Location: ../admin/assign_chore_view.php");
    exit();
}
?>
