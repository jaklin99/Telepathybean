function navigationDropdown() {
  var x = document.querySelector(".navigation")
  if (x.className === "navigation") {
    x.classList.add("responsive");
  } else {
    x.classList.remove("responsive");
  }
}