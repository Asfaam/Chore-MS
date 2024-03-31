<?php
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
    if ($recentAssignments) {
        echo "<h2></h2>";
        echo "<ul>";
        foreach ($recentAssignments as $assignment) {
            // Get the chore name based on the chore ID
            $choreName = get_chore_name($assignment['cid']);
            // Display the chore name
            echo "<li>{$choreName}</li>";
        }
        echo "</ul>";
    } else {
        echo "No recently assigned chores.";
    }
}
?>
