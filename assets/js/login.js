// Word aangeroepen als er wordt gedrukt op de "google sign in"
function google() {
    document.getElementById("signuptext").innerHTML = "This feature is currently under maintenance";
}

// Wachtwoord herhalen en checken
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

// Roept de functies aan
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
