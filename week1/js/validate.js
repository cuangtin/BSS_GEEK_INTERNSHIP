

function login() {
  var username = document.getElementById("username").value;
  var pwd = document.getElementById("pwd").value;
  if (username == "john" && pwd == "123") {
    location.replace("../html/menu/dashboard.html");
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
  var color = [
    randomNumber(0, 255),
    randomNumber(0, 255),
    randomNumber(0, 255),
  ];
  var date_now = new Date().toLocaleString();
  if (ip == "" || name == "" || power == "") {
    document.getElementById("validate_add_product").style.display = "block";
    return false;
  } else if (isNaN(power) == true) {
    document.getElementById("validate_add_product").innerHTML =
      "Power consumption must be a number!";
  } else {
    $(".table table tbody").append(
      "<tr><td>" +
        name +
        "</td><td>This is MAC ADDRESS</td><td>" +
        ip +
        "</td><td>" +
        date_now +
        "</td><td>" +
        power +
        "</td></tr>"
    );
    $(".total").html(parseInt(sum) + parseInt(power));
    document.getElementById("validate_add_product").style.display = "none";
    $(".ip").val("");
    $(".name").val("");
    $(".power").val("");
    addChartData(generateChart(data), name, power, color);
  }
}
function randomNumber(min, max) {
  return Math.random() * (max - min) + min;
}