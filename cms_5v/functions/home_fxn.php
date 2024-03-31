<?php
// Include the get_all_assignment_action.php file
include_once '../action/get_all_assignment_action.php';

// Call the necessary functions and assign the output to variables
$all_assignments = get_all_assignments();
$in_progress_assignments = get_in_progress_assignments();
$incomplete_assignments = get_incomplete_assignments();
$completed_assignments = get_completed_assignments();
$recent_assignments = get_recent_assignments();
?>
