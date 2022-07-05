function generateChart(data) {
  const ctx = $("#chart");
  var dataName = data.map((data) => data.name);
  var dataValue = data.map((data) => data.power);
  var bcolor = data.map(data =>data.bcolor = "rgb("+randomNumber(0,225)+", "+randomNumber(0,225)+", "+randomNumber(0,225)+")");
  var borderColor = data.map(data => data.borderColor = "rgb(226, 223, 223)");
  return new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: dataName,
      datasets: [
        {
          label: "Power Consumption",
          data: dataValue,
          backgroundColor: bcolor,
          borderColor: borderColor,
          borderWidth: 1,
        },
      ],
    },
  });
}



window.onload = function () {
  generateChart(data);
};
