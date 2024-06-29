//hide and show password

const lgpassword = document.getElementById("lpassword");
const cpassword = document.getElementById("cpassword");
const cfpassword = document.getElementById("cfPassword");
const icon_eye = document.querySelectorAll(".show-hide");

function showhide(){

    if (lgpassword.type === "password")
      {
          lgpassword.setAttribute("type", "text");
    }else{
        lgpassword.setAttribute("type", "password");
    }
    if (cpassword.type === "password")
      {
          cpassword.setAttribute("type", "text");
    }else{
       cpassword.setAttribute("type", "password");
    }
}
function show_hide(){
  if(cfpassword.type === "password")
    {
      cfpassword.setAttribute("type", "text");
  }else{
    cfpassword.setAttribute("type", "password");
  }
}