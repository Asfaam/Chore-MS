<?php

echo "<style>";
echo "#hungRight a:hover, .chore-details-link:hover {";
echo "    text-decoration: underline;"; 
echo "    color: #0056b3;"; 
echo "}";

echo ".chore-details-link:hover {";
echo "    text-decoration: underline;"; 
echo "    color: #0056b3;";
echo "}";
echo "</style>";

// Include the get_all_assignment_action.php file
include '../action/get_all_assignment_action.php';

// Function to display all assigned chores
function display_assigned_chores() {
    // Call the function to retrieve all assignments
    $assignments = get_all_assignments();
    if ($assignments) {
        echo "<h2>⬇️</h2>";
        echo "<ul>";
        foreach ($assignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "No assigned chores";
    }
}

// Function to display chores in progress
function display_chores_in_progress() {
    // Call the function to retrieve chores in progress
    $inProgressAssignments = get_chore_assignments_in_progress();
    if ($inProgressAssignments) {
        echo "<h2>⬇️</h2>";
        echo "<ul>";
        foreach ($inProgressAssignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "No chores in progress.";
    }
}

// Function to display incomplete chores
function display_incomplete_chores() {
    // Call the function to retrieve incomplete chores
    $incompleteAssignments = get_incomplete_chore_assignments();
    if ($incompleteAssignments) {
        echo "<h2>⬇️</h2>";
        echo "<ul>";
        foreach ($incompleteAssignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "No incomplete chores.";
    }
}

// Function to display completed chores
function display_completed_chores() {
    // Call the function to retrieve completed chores
    $completedAssignments = get_completed_chore_assignments();
    if ($completedAssignments) {
        echo "<h2>⬇️</h2>";
        echo "<ul>";
        foreach ($completedAssignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "No completed chores.";
    }
}


// Function to display recently assigned chores
function display_recently_assigned_chores() {
    // Call the function to retrieve recently assigned chores
    $recentAssignments = get_recently_assigned_chores();
    // Include Boxicons stylesheet
    echo "<link rel='stylesheet' type='text/css' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>";
    // Start the table with a class for styling
    echo "<h2 class='text-2xl font-bold mb-4' id='hungLeft' style='font-size:19px;'><strong><em>🔔 Recently Assigned Chores 🔔</em></strong></h2>";
    echo "<h2 class='text-2xl font-bold mb-4' id='hungRight' style='color:#0080FF; font-size:19px;'><em><a href='../view/chore_details_view.php'>View Assigned Chores</a></em></h2>";
    echo "<table class='w-full border-collapse border border-gray-300'>";
    // Table header
    //echo "<thead><tr><th class='border border-gray-300 p-2' style='width: 25%'>User name</th><th class='border border-gray-300 p-2' style='width: 25%'>Date Assigned</th><th class='border border-gray-300 p-2' style='width: 25%'>Date Completed</th><th class='border border-gray-300 p-2' style='width: 25%'>Chore Details</th></tr></thead>";
    // Table body
    echo "<tbody>";
    // Check if there are any assignments
    if ($recentAssignments) {
        // Loop through each assignment
        foreach ($recentAssignments as $assignment) {
            // Get the user name, date assigned, date completed, and chore details
            $userName = get_full_name($assignment['who_assigned']);
            $dateAssigned = "Date assigned: " . $assignment['date_assign'];
            $dateCompleted = "Date completed: " . $assignment['date_due']; // Use the value of date_completed from the assignment table
	    $choreName = get_chore_name($assignment['cid']);
	    $choreDetails = "<a href='chore_details_view.php' class='chore-details-link' title='{$choreName}'>Chore details</a>";
	    //$choreDetails = "Chore details";
            //$choreDetails = get_chore_name($assignment['cid']);
            // Output table row with icons and bold chore details
            echo "<tr><td class='border border-gray-300 p-2' style='width: 25%'><i class='bx bxs-user' style='margin-bottom: 2px;'></i> {$userName}</td><td class='border border-gray-300 p-2' style='width: 25%'><i class='bx bxs-calendar' style='margin-bottom: 2px;'></i> {$dateAssigned}</td><td class='border border-gray-300 p-2' style='width: 25%'><i class='bx bx-task' style='margin-bottom: 2px;'></i> {$dateCompleted}</td><td class='border border-gray-300 p-2 font-bold' style='width: 25%; color: #0080FF;'>{$choreDetails}</td></tr>";
        }
    } else {
        // If there are no assignments, display a message within a table row
        echo "<tr><td colspan='4' style='color: green; text-align: center;'><strong>Nothing to show here</strong></td></tr>";
    }
    // Close the table body and table
    echo "</tbody></table>";
}



?>



