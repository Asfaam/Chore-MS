<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Chore</title>
    <link rel="stylesheet" href="../css/delete_addChore.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1>Delete Chore</h1>
    
    <!-- Delete Confirmation Message -->
    <p>Are you sure you want to delete this chore?</p>
    
    <!-- Delete Chore Button -->
    <button id="deleteBtn">Delete Chore</button>

    <br>

    <div>
	<a href="add_chore.php" id="adchpg-button">
	    <i class='bx bx-chevron-left'></i>
            <span class="gotoDashboard"><strong><button onclick="goToAddChorePage()">Back to Add Chore Page</button></strong></span>
	</a>
    </div>

    <script src="../js/delete_addChore.js"></script>
</body>
</html>
