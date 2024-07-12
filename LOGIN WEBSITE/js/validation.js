// Function to validate email format
function validateEmail(email) {
  // Regular expression for basic email validation
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regex.test(email);
}

// Function to show/hide error label based on input validity
function toggleErrorLabel() {
  const emailInput = document.getElementById('signupEmail');
  const errorLabel = emailInput.parentElement.querySelector('.error-label');

  if (!validateEmail(emailInput.value)) {
    errorLabel.style.display = 'block'; // Show error label
  } else {
    errorLabel.style.display = 'none'; // Hide error label
  }
}

// Add event listener for input change to toggle error label dynamically
const emailInput = document.getElementById('signupEmail');
emailInput.addEventListener('input', toggleErrorLabel);

// Function to check email validity on page load
document.addEventListener('DOMContentLoaded', function() {
  toggleErrorLabel(); // Check email validity on page load
});

// Function to validate on form submit
function validatePassword() {
  // Other form validation logic here
  // Check email validation before allowing form submission
  return validateEmail(emailInput.value);
}
