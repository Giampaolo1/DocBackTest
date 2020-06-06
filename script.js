
function printData(data) {
  document.getElementById("container").innerHTML=data;
}

function getData() {

  $.ajax({

    url: "api.php",
    method: "GET",
    success : function(data) {

      printData(data);

      console.log("data", data);
    },
    error: function(err) {

      console.log("err", err);
    }
  });
}

function init() {
  getData();
}

$(document).ready(init);
