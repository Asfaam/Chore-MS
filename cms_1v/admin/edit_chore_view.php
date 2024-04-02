<?php
// Include the core.php file for user authentication
require_once('../settings/core.php');

echo '<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">';

// Include the get_a_chore_action.php file
include '../action/get_a_chore_action.php';

// Check user role
$userRoleID = getUserRoleID();
if ($userRoleID !== false) {
    // Check if the user is  not a super admin
    if ($userRoleID != 1) {
        // Redirect to main dashboard|user homepage for non-admin users
        header("Location: chore_control_view.php");
        die();
    }
} else {
    // Redirect to login page if user role is not available
    header("Location: ../Login/register_view.php");
    die();
}

// Check if the user is logged in
if (!isLoggedIn()) {
    // Redirect to login page
    header("Location: ../Login/register_view.php");
    exit();
}

// Check if chore ID is provided in the URL
if (isset($_GET['chore_id'])) {
    // Retrieve chore ID from URL
    $chore_id = $_GET['chore_id'];

    // Call the function to get the chore by ID
    $chore = get_chore_by_id($chore_id);

    // Check if chore is found
    if ($chore) {
        // Display the form for editing the chore
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Chore</title>
              <style>
        	body {
            	    max-width: 100%;
		    font-family: Times New Roman;
 		    background-color: beige;   
        	}
            
        	h1{
            	    color: blue;
        	}

        	form {
            	    margin-bottom: 20px;
        	}

        	label {
            	    display: block;
            	    margin-bottom: 5px;
        	}

        	input[type="text"] {
            	    width: 300px;
            	    padding: 8px;
            	    font-size: 16px;
            	    border: 1px solid #ccc;
            	    border-radius: 4px;
        	}

        	    button {
            	    padding: 10px 20px;
            	    font-size: 16px;
            	    border: none;
            	    border-radius: 4px;
            	    cursor: pointer;
            	    background-color: #007bff;
            	    color: #fff;
        	}

        	button:hover {
            	    background-color: #0056b3;
        	}

    	</style>
        </head>
        <body>
            <h1>Edit Chore</h1>
            <form action="../action/edit_a_chore_action.php" method="POST" >
                <input type="hidden" name="chore_id" value="<?php echo $chore['cid']; ?>">
                <label for="chore_name">Chore Name:</label>
                <input type="text" name="chore_name" id="chore_name" value="<?php echo $chore['chorename']; ?>" required>
                
                <button type="submit" name="submit">Update Chore</button>
            </form>
            <div>
	        <a href="../admin/edit_chore_view.php">
                    <span style="float:right"><strong><button><i class='bx bx-chevron-left'> Back </i></button></strong></span>
	        </a>
            </div>
        </body>
        </html>
        <?php
    } else {
        // Chore not found, redirect to chore control view page
        header("Location: ../admin/chore_control_view.php");
        exit();
    }
} else {
    // Chore ID not provided in URL, redirect to chore control view page
    header("Location: ../admin/chore_control_view.php");
    exit();
}
?>
