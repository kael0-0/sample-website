//The navbar function and the login singup form funtion

const navbarMenu = document.querySelector(".navbar .links");
const menuBtn = document.querySelector(".menu_btn"); 
const hideMenuBtn = navbarMenu.querySelector(".close_btn");
const showPopupBtn = document.querySelector(".login_btn");
const hidePopupBtn = document.querySelector(".form_popup .close_btn");
const formPopup = document.querySelector(".form_popup");
const loginSignupLink = document.querySelectorAll(".form_box .bottom_link a");


//the menu btn funtion for the mobile phone
menuBtn.addEventListener("click", () =>{
  navbarMenu.classList.toggle("show-menu");
});

hideMenuBtn.addEventListener("click",() =>menuBtn.click());

//show the popup form
showPopupBtn.addEventListener("click", () =>{
  document.body.classList.toggle("show-popup");
});
//hide the popup form
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

loginSignupLink.forEach(link => {
  link.addEventListener("click", (e) =>{
    e.preventDefault();
    formPopup.classList[link.id ===  "signup_link" ? 'add' : 'remove']("show-signup")
  });
});

