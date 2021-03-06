// Rappresentazione grafica con HB

function printData(data) {

  var target = $("#container");

  var template = $("#box-template").html();
  var compiled = Handlebars.compile(template);

  for (var i = 0; i < data.length; i++) {
    var person = data[i];
    var personHTML = compiled(person);
    target.append(personHTML);
  }
}

function printData2(data2) {

  var target = $("#container2");

  var template = $("#box-template2").html();
  var compiled = Handlebars.compile(template);

  for (var i = 0; i < data2.length; i++) {
    var person = data2[i];
    var personHTML = compiled(person);
    target.append(personHTML);
  }
}

function printData3(data3) {

  var target = $("#container4");

  var template = $("#box-template2").html();
  var compiled = Handlebars.compile(template);

  for (var i = 0; i < data3.length; i++) {
    var person = data3[i];
    var personHTML = compiled(person);
    target.append(personHTML);
  }
}



// ----------------------------------

// function printData(data) {
//   document.getElementById("container").innerHTML=data;
// }

function getData() {

  $.ajax({

    url: "getNodeTree.php",
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

function getData2() {

  $.ajax({

    url: "getNodeTreeNames.php",
    method: "GET",
    success : function(data2) {

      printData2(data2);

      console.log("data2", data2);
    },
    error: function(err) {

      console.log("err", err);
    }
  });
}

function getData3() {

  $.ajax({

    url: "getDataByID.php",
    method: "GET",
    success : function(data3) {

      console.log("data3", data3);
      printData3(data3);
      // $(".button").click(printData3(data3));

    },
    error: function(err) {

      console.log("err", err);
    }

  });

}

function init() {
  getData();
  getData2();
  getData3();

}


$(document).ready(init);
