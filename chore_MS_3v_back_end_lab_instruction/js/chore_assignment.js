// Define URL for edit page
var editPageUrl = '../admin/edit_assignChore.php';

// Function to retrieve chore list data from browser storage
function getChoreListFromStorage() {
    var choreListString = sessionStorage.getItem('choreList');
    return choreListString ? JSON.parse(choreListString) : [];
}

// Function to populate the assign chore dropdown with chore names
function populateAssignChoreDropdown(choreList) {
    var assignChoreDropdown = document.getElementById('assignChore');
    assignChoreDropdown.innerHTML = ''; // Clear existing options
    
    // Populate dropdown with chore names
    choreList.forEach(function(chore) {
        var option = document.createElement('option');
        option.text = chore.name;
        option.value = chore.id;
        assignChoreDropdown.add(option);
    });
}

// Function to populate the assigned chores table with data
function populateAssignedChoresTable(assignedChores) {
    var tableBody = document.getElementById('assignedChoresTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = ''; // Clear existing table rows
    
    // Populate table with assigned chores data
    assignedChores.forEach(function(chore) {
        var newRow = tableBody.insertRow();
        newRow.insertCell(0).textContent = chore.name;
        newRow.insertCell(1).textContent = chore.personAssigned;
        newRow.insertCell(2).textContent = chore.dateAssigned;
        newRow.insertCell(3).textContent = chore.dueDate;
        newRow.insertCell(4).textContent = chore.status;
        var actionsCell = newRow.insertCell(5);
        actionsCell.innerHTML = '<button class="editBtn" data-id="' + chore.id + '">Edit</button> ' +
                                '<button class="markCompleteBtn" data-id="' + chore.id + '">Mark Complete</button>';
    });

    // Add event listeners to edit and mark complete buttons
    var editButtons = document.querySelectorAll('.editBtn');
    var markCompleteButtons = document.querySelectorAll('.markCompleteBtn');
    
    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            editAssignedChore(parseInt(this.dataset.id));
        });
    });

    markCompleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            markChoreComplete(parseInt(this.dataset.id));
        });
    });
}

// Function to handle editing assigned chore
function editAssignedChore(choreId) {
    // Redirect to edit page with chore ID as query parameter
    window.location.href = editPageUrl + '?choreId=' + choreId;
}

// Function to handle marking chore as complete
function markChoreComplete(choreId) {
    // Implement logic to mark chore as complete
    console.log('Chore marked as complete:', choreId);
}

// Load chore list data and populate assign chore dropdown when the page loads
window.onload = function() {
    var choreList = getChoreListFromStorage();
    populateAssignChoreDropdown(choreList);
    
    // Dummy data for assigned chores (replace with actual data retrieval logic)
    var assignedChores = [
        { id: 1, name: 'Clean Kitchen', personAssigned: 'John', dateAssigned: '2024-02-14', dueDate: '2024-02-20', status: 'Incomplete' },
        { id: 2, name: 'Take out Trash', personAssigned: 'Alice', dateAssigned: '2024-02-14', dueDate: '2024-02-18', status: 'Complete' }
    ];
    
    // Populate table with assigned chores data
    populateAssignedChoresTable(assignedChores);
};

// JavaScript for form submission and dynamic functionality
document.getElementById('choreAssignmentForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get form values
    var choreId = parseInt(document.getElementById('assignChore').value);
    var dueDate = document.getElementById('dueDate').value;
    
    // Implement logic to assign chore with choreId and dueDate
    console.log('Chore assigned:', choreId, 'Due Date:', dueDate);
    
    // Reset form fields after submission
    document.getElementById('choreAssignmentForm').reset();
});
