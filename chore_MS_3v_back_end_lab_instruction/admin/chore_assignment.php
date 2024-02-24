<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Assignment</title>
    <link rel="stylesheet" href="../css/chore_assignment.css">
</head>
<body>
    <h1>Chore Assignment</h1>
    
    <!-- Chore Assignment Form -->
    <form action="#" method="POST" id="choreAssignmentForm">
        <label for="assignChore">Assign Chore:</label>
        <select name="assignChore" id="assignChore" required>
            <!-- Options for dynamically populated chore list -->
        </select>
	<br>
	<br>
        <label for="dueDate">Due Date:</label>
        <input type="date" name="dueDate" id="dueDate" required>
        <button type="submit" name="assignBtn" id="assignBtn">Assign</button>
    </form>
    
    <!-- Assigned Chores Table -->
    <h2>Assigned Chores</h2>
    <table id="assignedChoresTable">
        <thead>
            <tr>
                <th>Chore Name</th>
                <th>Person Assigned</th>
                <th>Date Assigned</th>
                <th>Due Date</th>
                <th>Chore Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Assigned chores will be dynamically added here -->
        </tbody>
    </table>

    <script src="../js/chore_assignment.js"></script>
</body>
</html>
