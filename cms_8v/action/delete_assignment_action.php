<?php
echo $_GET['assignmentid'];
// Include the connection file
include_once '../settings/connection.php';

include '../functions/get_all_assignment_fxn.php';

// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the assignment ID is provided in the query parameters
    if (isset($_GET['assignmentid'])) {
        // Retrieve the assignment ID from the query parameters
        $assignmentId = $_GET['assignmentid'];

        // Prepare the DELETE query
        $query = "DELETE FROM assignment WHERE assignmentid = ?";

        // Prepare the statement
        $stmt = $conn->prepare($query);

        // Bind parameters
        $stmt->bind_param("i", $assignmentId);

        // Execute the query
        if ($stmt->execute()) {
            // Successful deletion, redirect back to assign_chore_view.php
            header("Location: ../admin/assign_chore_view.php");
            exit();
        } else {
            // Deletion failed, display error
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // If assignment ID is not provided in the query parameters, redirect to assign_chore_view.php
        header("Location: ../admin/assign_chore_view.php");
        exit();
    }
}
?>
