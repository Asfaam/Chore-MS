<?php
// Include the connection file
include '../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data and assign each to a variable
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encrypt the password
    
    // Ensure fid is provided in the form
    if(isset($_POST['family_role'])){
        $fid = $_POST['family_role'];
    } else {
        // If fid is not provided in the form, handle the error appropriately
        echo "Error: Family ID (fid) is missing.";
        exit();
    }
    
    // Set default value for rid
    $rid = 3;
    
    // Write your INSERT query using the variables above
    $sql = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("iisssssss", $rid, $fid, $fname, $lname, $gender, $dob, $tel, $email, $hashed_password);
    
    // Execute the query
    if ($stmt->execute()) {
        // Registration successful, redirect to login_view page
        header("Location: ../view/register.php");
        exit();
    } else {
        // Registration failed, display error on register_view page
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement
    $stmt->close();
    
    // Close connection
    $conn->close();
}
?>
