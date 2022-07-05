

function login() {
  var username = document.getElementById("username").value;
  var pwd = document.getElementById("pwd").value;
  if (username == "john" && pwd == "123") {
    location.replace("../views/menu/dashboard.html");
  } else {
    document.getElementById("validate_login").style.display = "block";
    return false;
  }
}

function insertProduct() {
  var ip = $(".ip").val();
  var name = $(".name").val();
  var power = $(".power").val();
  var sum = $(".total").text();
  if (ip == "" || name == "" || power == "") {
    document.getElementById("validate_add_product").style.display = "block";
    return false;
  } else if (isNaN(power) == true) {
    document.getElementById("validate_add_product").innerHTML =
      "Power consumption must be a number!";
      return false;
  }
}
function randomNumber(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}