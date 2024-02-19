<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
    <link rel="stylesheet" href="../css/edit_addChore.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Edit Chore</h1>
    
    <!-- Edit Chore Form -->
    <form action="#" method="POST" id="editChoreForm">
        <label for="editChoreName">New Chore Name:</label>
        <input type="text" name="editChoreName" id="editChoreName" placeholder="Enter new chore name" required>
        <!-- Add any other input fields for edited chore details here -->
        <button type="submit" name="submit" id="editSubmitBtn">Save Changes</button>
    </form>

    <br>



                    
                        
                        
                    
               
    <div>
	<a href="add_chore.php" id="adchpg-button">
	    <i class='bx bx-chevron-left'></i>
            <span class="gotoDashboard"><strong><button onclick="goToAddChorePage()">Back to Add Chore Page</button></strong></span>
	</a>
    </div>

    <script src="../js/edit_addChore.js"></script>
</body>
</html>
