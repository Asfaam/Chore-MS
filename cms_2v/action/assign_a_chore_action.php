<?php
// Include the connection file
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if user is logged in
    include '../settings/core.php';
    if(!isLoggedIn()){
        // Redirect to login page if not logged in
        header("Location: ../Login/register_view.php");
        exit();
    }

session_start();

    
        // Collect form data and assign each to a variable
        $date_due = $_POST['date_due'];
        $userId = $_SESSION['user_id']; // Assuming user_id is stored in the session
        $dateAssign = date('Y-m-d'); // Assuming the assignment date is today's date
        $lastUpdated = date('Y-m-d'); // Assuming the last updated date is today's date
        $dateCompleted = NULL; // Assuming the assignment is not completed initially
        $img = ''; // Assuming no image is associated initially
        $whoAssigned = $_SESSION['user_id']; // Assuming the user is assigning the chore

	// Ensure cid is provided in the form
    	if(isset($_POST['assignChore'])){
        	$cid = $_POST['assignChore'];
    	} else {
        // If cid is not provided in the form, handle the error appropriately
        	echo "Error:Chore ID (cid) is missing.";
        	exit();
    	}

        // Set default value for sid
        $sid = 1;

	// Check if the due date is in the future
        $currentDate = date('Y-m-d');
        if ($date_due <= $currentDate) {
            //echo "Error: Due date must be in the future.";
	    $_SESSION['assign_error'] = "Due date must be in the future !!!";

	    header("Location: ../admin/assign_chore_view.php?error=prepare");
            exit();
        }

        // Check if the user already has an assignment for the selected chore
        $query = "SELECT * FROM assignment WHERE who_assigned = ? AND cid = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $whoAssigned, $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            //echo "Error: User already has an assignment for this chore.";
	    $_SESSION['assign_error'] = "User already has an assignment for this chore !!!";
	    header("Location: ../admin/assign_chore_view.php?error=prepare");
            exit();
        }

        // Inserting the assignment into the database

        // Prepare the INSERT query
        $query = "INSERT INTO assignment (cid, sid, date_assign, date_due, last_updated, date_completed, img, who_assigned) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $insertStmt = $conn->prepare($query);

        // Check if statement was prepared successfully
        if (!$insertStmt) {
            // Redirect back to the form page with an error message
            header("Location: ../admin/assign_chore_view.php?error=prepare");
            exit();
        }

        // Bind parameters
        $insertStmt->bind_param("iissssss", $cid, $sid, $dateAssign, $date_due, $lastUpdated, $dateCompleted, $img, $whoAssigned);

        // Execute the INSERT query
        if ($insertStmt->execute()) {
            // Successful insertion, redirect back to assign_chore_view.php
            header("Location: ../admin/assign_chore_view.php");
            exit();
        } else {
            // Error assigning chore, display error message
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close statement
        $insertStmt->close();
  
}

// Close connection
$conn->close();

?>


 

