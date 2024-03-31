php
 Include the get_all_assignment_action.php file
include_once 'get_all_assignment_action.php';

 Function to get all chore assignments in progress
function get_chore_assignments_in_progress() {
    $assignments = get_all_assignments();
    $in_progress_assignments = array_filter($assignments, function($assignment) {
        return $assignment['status'] == 2;  Assuming status 2 represents in progress
    });
    return $in_progress_assignments;
}

 Function to get all chore assignments incomplete
function get_incomplete_chore_assignments() {
    $assignments = get_all_assignments();
    $incomplete_assignments = array_filter($assignments, function($assignment) {
        return $assignment['status'] == 4;  Assuming status 4 represents incomplete
    });
    return $incomplete_assignments;
}

 Function to get all chore assignments completed
function get_completed_chore_assignments() {
    $assignments = get_all_assignments();
    $completed_assignments = array_filter($assignments, function($assignment) {
        return $assignment['status'] == 3;  Assuming status 3 represents completed
    });
    return $completed_assignments;
}

 Function to get recent chore assignments
function get_recent_chore_assignments() {
    $assignments = get_all_assignments();
     Sort assignments by date assigned in descending order
    usort($assignments, function($a, $b) {
        return strtotime($b['date_assigned']) - strtotime($a['date_assigned']);
    });
     Get the last 3 records
    $recent_assignments = array_slice($assignments, 0, 3);
    return $recent_assignments;
}

