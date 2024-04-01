const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function validateLogin() {
    const email = document.getElementById('email1').value;
    const password = document.getElementById('psw').value;


    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  

    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address');
      return false;
    }
  
    if (!passwordRegex.test(password)) {
      alert('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one number');
      return false;
    }
  
    return true;
  }

function validateRegistration() {
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email2').value;
  const phone = document.getElementById('phone').value;
  const password = document.getElementById('pswd').value;
  const confirmPassword = document.getElementById('pswd-repeat').value;

  const nameRegex = /^[a-zA-Z\s]*$/;

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  const phoneRegex = /^\d{10}$/;

  const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

  if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
    alert('Please enter a valid first and last name');
    return false;
  }

  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address');
    return false;
  }

  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid 10-digit phone number');
    return false;
  }

  if (!passwordRegex.test(password)) {
    alert('Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one number');
    return false;
  }

  if (password !== confirmPassword) {
    alert('Passwords do not match');
    return false;
  }

  const gender = document.querySelector('input[name="gender"]:checked');
  if (!gender) {
    alert('Please select your Gender');
    return false;
  }

  const familyRole = document.getElementById('family_role');
  if (familyRole.value === '0') {
    alert('Please select your Family Role');
    return false;
  }

  return true;
}