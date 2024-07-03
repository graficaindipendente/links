function checkEnter(event) {
  if (event.key === "Enter") {
    checkPassword();
  }
}

function checkPassword() {
  var passwordInput = document.getElementById("password").value;
  if (passwordInput === "2206") {
    document.getElementById("password-form").style.display = "none";
    document.getElementById("image-container").style.display = "block";
  } else {
    alert("PASSWORD ERRATA");
  }
}