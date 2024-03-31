<?php
// Include the get_all_assignment_action.php file
include '../action/get_all_assignment_action.php';

echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">';

// Function to display all chore assignments
function display_all_assignments() {
    global $conn;

    // Call the function to retrieve all assignments
    $assignments = get_all_assignments();

    // Check if any assignments were retrieved
    if (!empty($assignments)) {
        // Output the table rows for each assignment
        foreach ($assignments as $assignment) {
            echo "<tr>";
            echo "<td>" . get_chore_name($assignment['cid']) . "</td>"; // Get chore name
            echo "<td>" . get_full_name($assignment['who_assigned']) . "</td>"; // Get full name
            echo "<td>" . $assignment['date_assign'] . "</td>";
            echo "<td>" . $assignment['date_due'] . "</td>";
	    // Add status icons
            echo "<td>";
            echo "<i class='fas fa-check-circle' title='Assigned' style='color: green'></i>&nbsp;&nbsp;&nbsp;"; // Status icon
            echo "</td>";
            // Add action items (delete icons)
            echo "<td style='width: 1%;'>";
            echo "<a href='../action/delete_assignment_action.php?assignmentid=" . $assignment['assignmentid'] . "'><i class='fas fa-trash-alt' title='Delete'></i></a>&nbsp;&nbsp;&nbsp;"; // Delete icon
            echo "</td>";
            echo "</tr>";
        }
    } else {
        // If no assignments were retrieved, display a message
        echo "<tr><td colspan='6' style='color: green'><strong>No assignments found !!!</strong></td></tr>";
    }
}
?>
