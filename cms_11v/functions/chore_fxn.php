<?php
// Include the get_all_chores_action.php function
include '../action/get_all_chores_action.php';

echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">';

// Function to display all chores
function display_all_chores() {
    // Call the function to get all chores
    $chores = get_all_chores();
    
    // Check if chores are retrieved successfully
    if ($chores !== false) {
        // Check if any chores exist
        if (!empty($chores)) {
            // Display table headers
            echo "<table>";
            //echo "<tr><th>Chore ID</th><th>Chore Name</th><th>Actions</th></tr>";
            
            // Loop through each chore and display its details
            foreach ($chores as $chore) {
                echo "<tr>";
                echo "<td style='width: 33%;'>" . $chore['cid'] . "</td>";
                echo "<td td style='width: 33%;'>" . $chore['chorename'] . "</td>";
                // Add edit and delete icons or links here
		echo "<td style='width: 33%;'>";
		echo "<a href='../admin/edit_chore_view.php?chore_id=" . $chore['cid'] . "' class='edit-link'><i class='fas fa-edit' title='Edit'></i></a>&nbsp;&nbsp;&nbsp;";
		echo "<a href='../action/delete_chore_action.php?cid=" . $chore['cid'] . "' class='edit-link'><i class='fas fa-trash-alt' title='Delete'></i></a>"; // Delete icon
    		echo "</td>";
    		echo "</tr>";
            }
            
            echo "</table>";
        } else {
            // No chores found message
	    echo "<tr><td colspan='3' style='color: green; text-align: center; width: 99%;'><strong>No chores found !!!</strong></td></tr>";
        }
    } else {
        // Error retrieving chores
        echo "Error retrieving chores.";
    }
}

?>







