// Function to validate registration form
function validateRegistration() {
  var firstName = document.getElementById('firstName').value.trim();
  var lastName = document.getElementById('lastName').value.trim();
  var email = document.getElementById('email2').value.trim();
  var dob = document.getElementById('dob').value.trim();
  var gender = document.querySelector('input[name="gender"]:checked');
  var familyRole = document.getElementById('familyRole').value;
  var phone = document.getElementById('phone').value.trim();
  var password = document.getElementById('pswd').value;
  var confirmPassword = document.getElementById('pswd-repeat').value;

  // Regular expression for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Regular expression for phone number validation
  var phoneRegex = /^\d{10}$/;

  // Clear previous error messages
  var errorMessages = document.querySelectorAll('.error-message');
  errorMessages.forEach(function (errorMessage) {
    errorMessage.style.display = 'none';
  });

  // Perform validation
  if (firstName === '' || lastName === '' || email === '' || dob === '' || !gender || familyRole === '0' || phone === '' || password === '' || confirmPassword === '') {
    document.getElementById('error-all-fields').style.display = 'block';
    return false;
  }

  if (!emailRegex.test(email)) {
    document.getElementById('error-email').style.display = 'block';
    return false;
  }

  if (!phoneRegex.test(phone)) {
    document.getElementById('error-phone').style.display = 'block';
    return false;
  }

  if (password !== confirmPassword) {
    document.getElementById('error-password-match').style.display = 'block';
    return false;
  }

  // Form is valid
  return true;
}
