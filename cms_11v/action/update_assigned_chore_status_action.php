<?php
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if assignmentid and status are provided
    if(isset($_POST['assignmentid']) && isset($_POST['status'])) {
        // Sanitize the input
        $assignmentid = mysqli_real_escape_string($conn, $_POST['assignmentid']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);

        // Update the status of the assignment in the database
        $query = "UPDATE assignment SET sid = ? WHERE assignmentid = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $status, $assignmentid);

        // Execute the update query
        if ($stmt->execute()) {
            // Redirect back to the assign_chore_view.php page
            header("Location: ../admin/assign_chore_view.php");
            exit();
        } else {
            // Error updating status, display error message
            echo "Error updating status: " . $conn->error;
        }
        
        // Close statement
        $stmt->close();
    } else {
        // If assignmentid or status is not provided, handle the error appropriately
        echo "Error: Assignment ID or status is missing.";
    }
} else {
    // If the form is not submitted via POST method, redirect back to the assign_chore_view.php page
    header("Location: ../admin/assign_chore_view.php");
    exit();
}

// Close connection
$conn->close();
?>
