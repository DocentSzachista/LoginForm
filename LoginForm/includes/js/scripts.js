var userChoice = document.getElementById("userType")

var parentLogin = document.getElementById("parentLogin")
var parentEmail = document.getElementById("parentEmail")
var parentPassword = document.getElementById("parentPassword")

var studentLogin = document.getElementById("studentLogin")
var studentUsername = document.getElementById("studentUsername")
var studentPassword = document.getElementById("studentPassword")

function setUser(login) {
  userChoice.value = login.value
  if(login.value == "student"){
    parentEmail.name = ""
    parentPassword.name = ""
    studentUsername.name = "login"
    studentPassword.name = "password"
  }else if(login.value == "parent"){
    studentPassword.name = ""
    studentUsername = ""
    parentEmail.name = "login"
    parentPassword.name = "password"
  }
}

studentLogin.addEventListener('click', function (event) {
  setUser(this);
})
parentLogin.addEventListener('click', function (event) {
  setUser(this);
})


