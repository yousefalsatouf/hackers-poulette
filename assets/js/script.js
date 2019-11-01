let send = document.getElementById("send"),
  fName = document.querySelector("#f-name"),
  lName = document.querySelector("#l-name"),
  email = document.querySelector("#e-mail"),
  msg = document.querySelector("#message");

send.addEventListener("click", () => {
  if (fName.value == "") {
    fName.style.borderColor = "red";
  } else if (lName.value == "") {
    lName.style.borderColor = "red";
  } else if (email.value == "") {
    email.style.borderColor = "red";
  } else if (msg.value == "") {
    msg.style.borderColor = "red";
  }
  return true;
});

/* function validate() {

} */
