
//Update Chart
function addChartData(chart, label, data, color) {
  chart.data.labels.push(label);
  chart.data.datasets.forEach((dataset) => {
    dataset.data.push(data);
    dataset.backgroundColor.push(`rgb(${color[0]},${color[1]},${color[2]})`);
    dataset.borderColor.push("rgb(226, 223, 223)");
    dataset.borderWidth = 1;
  });
  chart.update();
}

//Create chart
function generateChart(data) {
  const ctx = $("#chart");
  var dataName = data.map((data) => data.name);
  var dataValue = data.map((data) => data.value);
  return new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: dataName,
      datasets: [
        {
          label: "Power Consumption",
          data: dataValue,
          backgroundColor: [
            "rgb(75,192,192)",
            "rgb(255,95,129)",
            "rgb(255,159,64)",
            "rgb(255,205,86)",
          ],
          borderColor: [
            "rgb(226, 223, 223)",
            "rgb(226, 223, 223)",
            "rgb(226, 223, 223)",
            "rgb(226, 223, 223)",
          ],
          borderWidth: 1,
        },
      ],
    },
  });
}

function loadDataToDashboard(){
  var sum = 0;
for (var i = 0; i < data.length; i++) {
  $(".table table tbody").append(
    "<tr><td>" +
      data[i].name +
      "</td><td>" +
      data[i].device +
      "</td><td>" +
      data[i].mac_address +
      "</td><td>" +
      data[i].ip_address +
      "</td><td class='value'>" +
      +data[i].value +
      "</td></tr>"
  );
  sum += data[i].value;
}
$(".total").html(sum);
}

  let btn_humburger = document.querySelector("#menu");
let sidebar = document.querySelector(".sidebar")

btn_humburger.onclick = function (){
  sidebar.classList.toggle("active");
}

window.onload = function () {
  loadDataToDashboard();
  generateChart(data);
};
