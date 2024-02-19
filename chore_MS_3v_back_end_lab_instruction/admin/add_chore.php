<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chore</title>
    <link rel="stylesheet" href="../css/add_chore.css">
</head>
<body>
    <h1>Add Chore</h1>
    
    <!-- Chore Form -->
    <form action="#" method="POST" id="choreForm">
        <label for="choreName">Chore Name:</label>
        <input type="text" name="choreName" id="choreName" placeholder="Enter chore name" required>
        <!-- Add any other input fields for chore details here -->
        <button type="submit" name="submit" id="submitBtn">Add Chore</button>
    </form>
    
    <!-- Chore Table -->
    <h2>Chore List</h2>
    <table id="choreTable">
        <thead>
            <tr>
                <th>Chore ID</th>
                <th>Chore Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Chore entries will be dynamically added here -->
        </tbody>
    </table>

    <script src="../js/add_chore.js"></script>
    
   
</body>
</html>
