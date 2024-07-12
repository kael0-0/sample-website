// Declare variables at the top for reusability
const navbarMenu = document.querySelector(".navbar .links");
const menuBtn = document.querySelector(".menu_btn"); 
const hideMenuBtn = navbarMenu.querySelector(".close_btn");
const showPopupBtn = document.querySelector(".login_btn");
const hidePopupBtn = document.querySelector(".form_popup .close_btn");
const formPopup = document.querySelector(".form_popup");
const loginSignupLink = document.querySelectorAll(".form_box .bottom_link a");
const forgotPassword = document.querySelectorAll(".form_box .middle_link a");
const submenu = document.getElementById("subMenu");

// Function to handle the ESC key press
function escape() {
  document.removeEventListener('keydown', handleEscape);
  document.addEventListener('keydown', handleEscape);
}

// Function to handle the ESC key press events
function handleEscape(event) {
  if (event.key === 'Escape') {
    if (navbarMenu.classList.contains('show-menu')) {
      navbarMenu.classList.remove('show-menu');
    }
    if (document.body.classList.contains('show-popup')) {
      document.body.classList.remove('show-popup');
    }
    if (submenu && submenu.classList.contains('open_menu')) {
      submenu.classList.remove('open_menu');
    }
  }
}

// Function to toggle the profile menu
function profileMenu() {
  submenu.classList.toggle('open_menu');
  escape();  // Call the escape to initialize or update the ESC key functionality
}

// Call escape initially to set up the ESC key functionality
escape();

// Event listeners
menuBtn.addEventListener("click", () =>{
  navbarMenu.classList.toggle("show-menu");
  escape();  
});

hideMenuBtn.addEventListener("click", () => menuBtn.click());

showPopupBtn.addEventListener("click", () =>{
  document.body.classList.toggle("show-popup");
  escape();
});

hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

loginSignupLink.forEach(link => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const targetFormClass = link.id === "signup_link" ? "show-signup" : "login";
    formPopup.classList.remove("login", "show-signup", "show-fgpassword");
    formPopup.classList.add(targetFormClass);
  });
});

forgotPassword.forEach(link => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    formPopup.classList.remove("login", "show-signup", "show-fgpassword");
    formPopup.classList.add("show-fgpassword");
  });
});

//the functionality of the show/hide password
function showhide() {
  if (cpassword.type === "password") {
    cpassword.setAttribute("type", "text");
    icon_eye.forEach(icon => icon.classList.add('hide'));
  } else {
    cpassword.setAttribute("type", "password");
    icon_eye.forEach(icon => icon.classList.remove('hide'));
  }
}

function show_hide() {
  if (cfpassword.type === "password") {
    cfpassword.setAttribute("type", "text");
    icons_eye.forEach(icon => icon.classList.add('hide'));
  } else {
    cfpassword.setAttribute("type", "password");
    icons_eye.forEach(icon => icon.classList.remove('hide'));
  }
}

function validatePassword() {
  const password = document.getElementById("lpassword").value;
  const confirmPassword = document.getElementById("cfPassword").value;

  if (password !== confirmPassword) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}

function showTermsAlert() {
  alert("By clicking 'OK', you agree to our Terms and Conditions.");
}

const termsLink = document.getElementById('termsLink');
termsLink.addEventListener('click', showTermsAlert);
