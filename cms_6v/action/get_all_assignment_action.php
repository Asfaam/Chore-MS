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

// Function to retrieve chore assignments in progress
function get_in_progress_assignments() {
    global $conn;

    // Initialize an empty array to store assignments in progress
    $in_progress_assignments = array();

    // Write the SELECT query to fetch assignments in progress (Status = 2)
    $query = "SELECT * FROM assignment WHERE Status = 2";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each assignment in progress to the array
                $in_progress_assignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the assignments in progress array
    return $in_progress_assignments;
}

// Function to retrieve incomplete chore assignments
function get_incomplete_assignments() {
    global $conn;

    // Initialize an empty array to store incomplete assignments
    $incomplete_assignments = array();

    // Write the SELECT query to fetch incomplete assignments (Status = 4)
    $query = "SELECT * FROM assignment WHERE Status = 4";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each incomplete assignment to the array
                $incomplete_assignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the incomplete assignments array
    return $incomplete_assignments;
}

// Function to retrieve completed chore assignments
function get_completed_assignments() {
    global $conn;

    // Initialize an empty array to store completed assignments
    $completed_assignments = array();

    // Write the SELECT query to fetch completed assignments (Status = 3)
    $query = "SELECT * FROM assignment WHERE Status = 3";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each completed assignment to the array
                $completed_assignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the completed assignments array
    return $completed_assignments;
}

// Function to retrieve recent chore assignments
function get_recent_assignments() {
    global $conn;

    // Initialize an empty array to store recent assignments
    $recent_assignments = array();

    // Write the SELECT query to fetch recent assignments (Status = 2)
    $query = "SELECT * FROM assignment WHERE Status = 2 ORDER BY Date_Assigned DESC LIMIT 3";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each recent assignment to the array
                $recent_assignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the recent assignments array
    return $recent_assignments;
}
?>
