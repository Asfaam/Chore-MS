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


// HomePage Functionality

// Function to retrieve all chore assignments in progress
function get_chore_assignments_in_progress() {
    global $conn;

    // Initialize an empty array to store assignments
    $assignmentsInProgress = array();

    // Write the SELECT query to fetch chore assignments in progress
    $query = "SELECT * FROM assignment WHERE sid = 2";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each assignment in progress to the array
                $assignmentsInProgress[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the assignments in progress array
    return $assignmentsInProgress;
}


// Function to retrieve all incomplete chore assignments
function get_incomplete_chore_assignments() {
    global $conn;

    // Initialize an empty array to store incomplete assignments
    $incompleteAssignments = array();

    // Write the SELECT query to fetch incomplete chore assignments
    $query = "SELECT * FROM assignment WHERE sid = 4";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each incomplete assignment to the array
                $incompleteAssignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the incomplete assignments array
    return $incompleteAssignments;
}


// Function to retrieve all completed chore assignments
function get_completed_chore_assignments() {
    global $conn;

    // Initialize an empty array to store completed assignments
    $completedAssignments = array();

    // Write the SELECT query to fetch completed chore assignments
    $query = "SELECT * FROM assignment WHERE sid = 3";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each completed assignment to the array
                $completedAssignments[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the completed assignments array
    return $completedAssignments;
}


// Function to retrieve the last 3 recently assigned chores
function get_recently_assigned_chores() {
    global $conn;

    // Write the SELECT query to fetch the last 3 recently assigned chores
    //$query = "SELECT * FROM assignment WHERE sid = 2 ORDER BY date_assign DESC LIMIT 3";

    // Write the SELECT query to fetch the first 5 recently assigned chores
    $query = "SELECT * FROM assignment ORDER BY assignmentid DESC LIMIT 5";
    $result = mysqli_query($conn, $query);

    // Process the result and return data as needed
    return $result;
}



// Additional Functionality

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

// Function to get full name of the admin by pid
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

// Function to retrieve all standard users
function get_standard_users() {
    global $conn;

    // Initialize an empty array to store standard users
    $standardUsers = array();

    // Write the SELECT query to fetch standard users
    $query = "SELECT * FROM People WHERE rid = 3"; // Assuming 'standard' role has ID 3
    
    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any records were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch rows from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Add each standard user to the array
                $standardUsers[] = $row;
            }
        }

        // Free result set
        mysqli_free_result($result);
    }

    // Return the array of standard users
    return $standardUsers;
}


// Function to get the full name from pid
function get_full_name_from_pid($pid) {
    global $conn; // Assuming $conn is your database connection object

    // SQL query to retrieve the full name based on pid
    $query = "SELECT CONCAT(fname, ' ', lname) AS full_name FROM People WHERE pid = ?";
    
    // Prepare the query
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        return false;
    }

    // Bind the parameter
    $stmt->bind_param("i", $pid);

    // Execute the query
    $stmt->execute();

    // Bind the result
    $stmt->bind_result($full_name);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();

    return $full_name;
}


// Function to get all chore details
function get_all_chore_details() {
    global $conn; // Assuming $conn is your database connection object
    
    // Initialize an empty array to store chore details
    $choreDetails = array();

    // Query to select all chore details
    $query = "SELECT * FROM assignment ORDER BY assignmentid DESC LIMIT 5";

    // Execute the query
    $result = $conn->query($query);

    // Check if there are any rows returned
    if ($result->num_rows > 0) {
        // Loop through each row and fetch chore details
        while ($row = $result->fetch_assoc()) {
            // Add the chore details to the array
            $choreDetails[] = $row;
        }
    }

    // Return the chore details array
    return $choreDetails;
}


?>
