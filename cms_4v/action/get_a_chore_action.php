<?php
// Include the connection file
include '../settings/connection.php';

// Function to get a single chore by ID
function get_chore_by_id($chore_id) {
    global $conn;

    // Write SELECT query to retrieve chore by ID
    $sql = "SELECT * FROM chores WHERE cid = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("i", $chore_id);
        
        // Execute the query
        if ($stmt->execute()) {
            // Chore retrieved successfully
            $result = $stmt->get_result();

            // Check if any record was returned
            if ($result->num_rows > 0) {
                // Fetch the record and assign to variable
                $chore = $result->fetch_assoc();
                return $chore;
            } else {
                // No chore found with the given ID
                return null;
            }
        } else {
            // Error executing query
            return null;
        }
        
        // Close statement
        $stmt->close();
    } else {
        // Error preparing statement
        return null;
    }
}
?>
