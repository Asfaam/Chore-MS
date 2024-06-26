<?php
// Include the connection file
include '../settings/connection.php';
include '../functions/chore_fxn.php';

// Check if the chore ID is provided in the GET request
if (isset($_GET['cid'])) {
    // Retrieve the chore ID from the GET parameter
    $choreId = $_GET['cid'];

    // Check if the user is a superadmin (rid == 1)
    session_start();
    if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) {
        // User is a superadmin, proceed with deletion

        // Write DELETE query to delete chore from the database
        $sql = "DELETE FROM chores WHERE cid = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("i", $choreId);

            // Execute the query
            if ($stmt->execute()) {
                // Chore deleted successfully, redirect to chore display page
                header("Location: ../admin/chore_control_view.php");
                exit();
            } else {
                // Error executing query
                echo "Error: Unable to execute the delete query.";
            }

            // Close statement
            $stmt->close();
        } else {
            // Error preparing statement
            echo "Error: Unable to prepare the delete statement.";
        }
    } else {
        // Redirect to add chore page
        header("Location: ../admin/chore_control_view.php");
    }
} else {
    // Chore ID not provided, redirect back to chore display page
    header("Location: ../admin/chore_control_view.php");
    exit();
}

// Close connection
$conn->close();

?>
