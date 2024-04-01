<?php

echo "<style>";
echo "body {";
echo "    font-family: 'Goudy Old Style', serif;";
echo "}";
echo ".no-chores {";
echo "    font-family: 'Goudy Old Style', serif;";
echo "    font-size: 20px;";
echo "    color: #0056b3;";
echo "}";
echo "</style>";

// Include the get_all_assignment_action.php file
include '../action/get_all_assignment_action.php';

// Function to display all assigned chores
function display_assigned_chores() {
    // Call the functions to retrieve assignments for each status
    $completedAssignments = get_completed_chore_assignments();
    $incompleteAssignments = get_incomplete_chore_assignments();
    $inProgressAssignments = get_chore_assignments_in_progress();
    
    // Merge all assignments into a single array
    $allAssignments = array_merge($completedAssignments, $inProgressAssignments, $incompleteAssignments);

    if ($allAssignments) {
        echo "<h2>⬇️</h2>";
        echo "<ul>";
        foreach ($allAssignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p class='no-chores'><em><strong>Nothing to show here</strong><em></p>";
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
        echo "<p class='no-chores'><em><strong>Nothing to show here</strong><em></p>";
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
        echo "<p class='no-chores'><em><strong>Nothing to show here</strong><em></p>";
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
        echo "<p class='no-chores'><em><strong>Nothing to show here</strong><em></p>";
    }
}

?>

<style>
        body {
            font-family: Goudy Old Style;
            background-color: beige;
	}
</style>
