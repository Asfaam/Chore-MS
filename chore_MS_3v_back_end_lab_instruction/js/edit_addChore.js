// JavaScript for edit chore functionality
document.getElementById('editChoreForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get edited chore name value
    var editedChoreName = document.getElementById('editChoreName').value;
    
    // Handle saving changes (you can implement this functionality as needed)
    alert('Saving changes. New chore name: ' + editedChoreName);
});

// Function to redirect back to the Add Chore page
function goToAddChorePage() {
    window.location.href = 'add_chore.php';
}
