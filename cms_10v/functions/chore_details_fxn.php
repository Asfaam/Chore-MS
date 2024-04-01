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
        // Output the table header
        echo "<table class='w-full border-collapse border border-gray-300'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th style='width: 20%;'>Chore Name</th>";
        echo "<th style='width: 20%;'>Assigned By</th>";
        echo "<th style='width: 20%;'>Date Assigned</th>";
        echo "<th style='width: 20%;'>Due Date</th>";
        echo "<th style='width: 20%;'>Chore Status</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Output the table rows for each assignment
        foreach ($assignments as $assignment) {
            echo "<tr>";
            echo "<td>" . get_chore_name($assignment['cid']) . "</td>"; // Get chore name
            echo "<td>" . get_full_name($assignment['who_assigned']) . "</td>"; // Get full name
            echo "<td>" . $assignment['date_assign'] . "</td>";
            echo "<td>" . $assignment['date_due'] . "</td>";

            // Add status icons
            echo "<td>";
            echo "<i class='fas fa-check-circle' title='Assigned' style='color: #0080FF'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "</td>";

            echo "</tr>";
        }

        // Close the table body and table
        echo "</tbody>";
        echo "</table>";
    } else {
        // If no assignments were retrieved, display a message
        echo "<p>Nothing to show here!</p>";
    }
}
?>
