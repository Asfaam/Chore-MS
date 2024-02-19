// Define URLs for edit and delete pages
var editPageUrl = '../admin/edit_addChore.php';
var deletePageUrl = '../admin/delete_addChore.php';

// Function to retrieve chore list data from browser storage
function getChoreListFromStorage() {
    var choreListString = sessionStorage.getItem('choreList');
    return choreListString ? JSON.parse(choreListString) : [];
}

// Function to update chore list data in browser storage
function updateChoreListInStorage(choreList) {
    sessionStorage.setItem('choreList', JSON.stringify(choreList));
}

// Function to validate chore name
function isValidChoreName(name) {
    // Regular expression to match only alphabetic characters
    var regex = /^[a-zA-Z\s]*$/;
    return regex.test(name);
}

// Function to populate the chore table with data
function populateChoreTable(choreList) {
    var tableBody = document.getElementById('choreTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = ''; // Clear existing table rows
    
    // Populate table with chore list data
    choreList.forEach(function(chore) {
        var newRow = tableBody.insertRow();
        newRow.insertCell(0).textContent = chore.id;
        newRow.insertCell(1).textContent = chore.name;
        var actionsCell = newRow.insertCell(2);
        actionsCell.innerHTML = '<button class="editBtn" data-id="' + chore.id + '">Edit</button> ' +
                                '<button class="deleteBtn" data-id="' + chore.id + '">Delete</button>';
    });

    // Add event listeners to edit and delete buttons
    var editButtons = document.querySelectorAll('.editBtn');
    var deleteButtons = document.querySelectorAll('.deleteBtn');
    
    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            editChore(parseInt(this.dataset.id));
        });
    });

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            deleteChore(parseInt(this.dataset.id));
        });
    });
}

// Function to handle navigation back to Add Chore page
function goToAddChorePage() {
    window.location.href = 'add_chore.html';
}

// Load chore list data and populate table when the page loads
window.onload = function() {
    var choreList = getChoreListFromStorage();
    populateChoreTable(choreList);
};

// Function to handle editing chore
function editChore(choreId) {
    // Redirect to edit page with chore ID as query parameter
    window.location.href = editPageUrl + '?choreId=' + choreId;
}

// Function to handle deleting chore
function deleteChore(choreId) {
    var choreList = getChoreListFromStorage();
    
    // Remove chore with specified ID from chore list
    choreList = choreList.filter(function(chore) {
        return chore.id !== choreId;
    });
    
    // Update chore list in browser storage
    updateChoreListInStorage(choreList);
    
    // Populate table with updated chore list data
    populateChoreTable(choreList);
}

// JavaScript for form validation and dynamic functionality
document.getElementById('choreForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get chore name value
    var choreName = document.getElementById('choreName').value;
    
    // Validate chore name
    if (!isValidChoreName(choreName)) {
        alert('Please enter a valid name with only alphabetic characters.');
        return;
    }
    
    // Create new chore entry in the table
    addChoreEntry(choreName);
    
    // Clear form fields after submission
    document.getElementById('choreForm').reset();
});

// Function to add chore entry to the table
function addChoreEntry(choreName) {
    var choreList = getChoreListFromStorage();
    var choreId = choreList.length + 1;
    
    // Add new chore entry to the chore list
    choreList.push({ id: choreId, name: choreName });
    
    // Update chore list in browser storage
    updateChoreListInStorage(choreList);

    // Populate table with chore list data
    populateChoreTable(choreList);
}
