<?php
$_POST['chore_id'];

// Include the connection file
include '../settings/connection.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $chore_id = $_POST['chore_id'];
    $chore_name = $_POST['chore_name'];
    // Add more fields if needed
    
    // Write UPDATE query to update chore in the database
    $sql = "UPDATE chores SET chorename = ? WHERE cid = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("si", $chore_name, $chore_id);
        
        // Execute the query
        if ($stmt->execute()) {
            // Chore updated successfully, redirect to chore control view page
            header("Location: ../admin/chore_control_view.php");
            exit();
        } else {
            // Error executing query
            echo "Error: Unable to update the chore.";
        }
        
        // Close statement
        $stmt->close();
    } else {
        // Error preparing statement
        echo "Error: Unable to prepare the update statement.";
    }
} else {
    // Form not submitted, redirect back to chore control view page
    header("Location: ../admin/chore_control_view.php");
    exit();
}
?>
