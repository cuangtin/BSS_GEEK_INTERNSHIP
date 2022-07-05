function numPages(records_per_page, data) {
  return Math.ceil(data.length / records_per_page);
}

function generatePage(search) {
  for (var i = 1; i <= numPages(7, search); i++) {
    $(".pagination_logs ul").append(
      `<a href='#' id='${i}' onclick="loadDataToTable(${i}, 7)">` + i + `</a>`
    );
  }
  $(".total").html(search.length);
}

var array = [];

function generatePageSearch(search) {
  for (var i = 1; i <= numPages(7, search); i++) {
    $(".pagination_logs ul").append(
      `<a href='#' id='${i}' onclick="loadDataToTableSearch(${i}, 7)">` + i + `</a>`
    );
  }
  $(".total").html(search.length);
}

function loadDataToTable(page_number, records_per_page) {
  $(".table table tbody").empty();
  for (
    var i = (page_number - 1) * records_per_page;
    i < page_number * records_per_page && i < data.length;
    i++
  ) {
    $(".table table tbody").append(
      "<tr><td>" +
        data[i]._id +
        "</td><td>" +
        data[i].name +
        "</td><td>" +
        data[i].action +
        "</td><>" +
        data[i].date +
        "</td></tr>"
    );
  }
}

function loadDataToTableSearch(page_number, records_per_page) {
  $(".table table tbody").empty();
  for (
    var i = (page_number - 1) * records_per_page;
    i < page_number * records_per_page && i < array.length;
    i++
  ) {
    $(".table table tbody").append(
      "<tr><td>" +
      array[i]._id +
        "</td><td>" +
        array[i].name +
        "</td><td>" +
        array[i].action +
        "</td><td>" +
        array[i].date +
        "</td></tr>"
    );
  }
}

function searchByName() {
  $(".table table tbody").empty();
  $(".pagination_logs ul").empty();
  var search_input = $(".title_table-logs #search_logs").val();
  var data_search = data.filter((data) => {
    if (data.name.indexOf(search_input) != -1) {
      return data;
    }
  });
  if (!data_search) {
    $(".table table tbody").append(
      "<tr><td><span>No logs found!</span></td></tr"
    );
    $(".total").html("0");
    return;
  }

  for (var i = 0; i < 7; i++) {
    $(".table table tbody").append(
      "<tr><td>" +
        data_search[i]._id +
        "</td><td>" +
        data_search[i].name +
        "</td><td>" +
        data_search[i].action +
        "</td><td>" +
        data_search[i].date +
        "</td></tr>"
    );
  }
  array = data_search;
  generatePageSearch(data_search);
  $(".total").html(data_search.length);
}

window.onload = function () {
  generatePage(data);
  loadDataToTable(1, 7);
};
