document.getElementById("registerForm").addEventListener("submit", checkRegisterForm)

function checkRegisterForm(event) {
  event.preventDefault()
  let warning = ""
  let email = document.getElementsByName("email")[0]
  let username = document.getElementsByName("username")[0]
  let password1 = document.getElementsByName("password1")[0]
  let password2 = document.getElementsByName("password2")[0]
  let phone = document.getElementsByName("phone")[0]

  if (password1.value == "") {
    password1.classList.add("inputError")
    warning = "PASSWORD IS EMPTY !"
  }
  if (password2.value == "") {
    warning = "CONFIRM PASSWORD PLEASE"
    password2.style.borderColor = "red"
  }
  if (password1.value !== password2.value) {
    warning = "<br>PASSWORDS DONT MATCH !"
    password1.style.borderColor = "red"
  }
  if (email.value == "") {
    warning = "email IS EMPTY !<br>"
    email.classList.add("inputError")
  }
  if (username.value == "") {
    warning = "USERNAME IS EMPTY !<br>"
    username.style.borderColor = "red"
  }
  if (phone.value == "") {
    warning = "PHONE IS EMPTY !<br>"
    phone.style.borderColor = "red"
  }
  document.getElementById("warning").innerHTML = warning
  if (warning === "") document.getElementById("registerForm").submit()
}
