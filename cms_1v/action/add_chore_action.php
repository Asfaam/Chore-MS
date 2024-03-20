<?php
// Include the connection file
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data and assign each to a variable
    $choreName = $_POST['choreName'];
    
    // Ensure choreName is provided in the form
    if(empty($choreName)) {
        // If choreName is not provided in the form, handle the error appropriately
        echo "Error: Chore Name is missing.";
        exit();
    }
    
    // Write your INSERT query using the choreName variable
    $sql = "INSERT INTO chores (chorename) VALUES (?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("s", $choreName);
    
    // Execute the query
    if ($stmt->execute()) {
        // Chore added successfully, redirect back to chore_control_view.php
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        // Error adding chore, display error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
