<?php
// Start session
session_start();

// Include the connection file
include '../settings/connection.php';

// Check if login button was clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data and store in variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Write a query to SELECT a record from the people table using the email
    $sql = "SELECT pid, passwd, rid FROM people WHERE email = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("s", $email);
    
    // Execute the query
    $stmt->execute();
    
    // Store the result
    $stmt->store_result();
    
    // Check if any row was returned
    if ($stmt->num_rows == 1) {
        // Bind the result variables
        $stmt->bind_result($pid, $hashed_password, $rid);
        
        // Fetch the record
        $stmt->fetch();
        
        // Verify password user provided against database record using password_verify
        if (password_verify($password, $hashed_password)) {
            // Password is correct, create session for user id and role id
            $_SESSION['user_id'] = $pid;
            $_SESSION['role_id'] = $rid;
            
            // Redirect based on role ID
            if ($rid == 1 || $rid == 2) {
                // Redirect admin and superadmin to adminPage.php
                header("Location: ../admin/adminPage.php");
            } elseif ($rid == 3) {
                // Redirect standard user to home_view.php
                header("Location: ../view/home_view.php");
            }
            exit();
        } else {
            // Incorrect password, provide appropriate response
            echo "Incorrect email or password";
        }
    } else {
        // No record found, provide appropriate response
        echo "User not registered or incorrect email";
    }
    
    // Close statement
    $stmt->close();
    
    // Close connection
    $conn->close();
} else {
    // Stop processing and provide appropriate message or direction
    echo "Login button not clicked";
}
?>
