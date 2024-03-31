<?php
// Include the connection file
include '../settings/connection.php';

// Function to retrieve all chore assignments
function get_all_assignments() {
    global $conn;

    // Initialize an empty array to store assignments
    $assignments = array();

    // Write the SELECT query to fetch all assignments
    $query = "SELECT * FROM assignment";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each assignment to the array
                $assignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the assignments array
    return $assignments;
}

// Function to get chore name by cid
function get_chore_name($cid) {
    global $conn;

    // Prepare statement
    $stmt = $conn->prepare("SELECT chorename FROM chores WHERE cid = ?");
    $stmt->bind_param("i", $cid);

    // Execute statement
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($chorename);

    // Fetch value
    $stmt->fetch();

    // Close statement
    $stmt->close();

    return $chorename;
}

// Function to get full name by pid
function get_full_name($pid) {
    global $conn;

    // Prepare statement
    $stmt = $conn->prepare("SELECT CONCAT(fname, ' ', lname) AS full_name FROM people WHERE pid = ?");
    $stmt->bind_param("i", $pid);

    // Execute statement
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($full_name);

    // Fetch value
    $stmt->fetch();

    // Close statement
    $stmt->close();

    return $full_name;
}
?>
