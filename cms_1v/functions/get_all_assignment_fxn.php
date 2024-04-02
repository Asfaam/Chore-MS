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
	    
           // Determine status color and status title based on status (update)
            $statusColor = '';
            $statusTitle = '';
            switch ($assignment['sid']) {
                case 2: // InProgress
                    $statusColor = '#ffcc00'; // Change color to gold
                    $statusTitle = 'InProgress'; // Set title to InProgress
                    break;
                case 3: // Completed
                    $statusColor = '#00cc00'; // Change color to green
                    $statusTitle = 'Completed'; // Set title to Completed
                    break;
                case 4: // Incomplete
                    $statusColor = '#ff0000'; // Change color to red
                    $statusTitle = 'Incomplete'; // Set title to Incomplete
                    break;
                default:
                    $statusColor = '#0080FF'; // Default color
                    $statusTitle = 'Assigned'; // Set title to Assigned
                    break;
            }

            // Display status icon with dynamic color and make it clickable
            echo "<td>";
            echo "<a href='../admin/update_assigned_chore_status.php?assignmentid=" . $assignment['assignmentid'] . "' class='delete-link'>";
            echo "<i class='fas fa-check-circle' title='" . $statusTitle . "' style='color: " . $statusColor . "' ></i>";
            echo "</a>";
            echo "</td>";

            // Add action items (delete icons)
            echo "<td style='width: 1%;'>";
            echo "<a href='../action/delete_assignment_action.php?assignmentid=" . $assignment['assignmentid'] . "' class='delete-link'><i class='fas fa-trash-alt' title='Delete'></i></a>&nbsp;&nbsp;&nbsp;"; // Delete icon
            echo "</td>";
            echo "</tr>";
        }
    } else {
        // If no assignments were retrieved, display a message
        echo "<tr><td colspan='6' style='color: green'><strong>No assignments found !!!</strong></td></tr>";
    }
}
?>
