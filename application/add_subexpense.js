$(() => {
  show_payment();
  $("#save_payment").click(save_payment);
});

// function show_payment() {
//   var query = window.location.search.substring(1);
//   var vars = query.split("=");
//   var ID = vars[1];

//   var urlAPI = "http://localhost/hermes/api.php/ShowCheckoutsubexpense/" + ID;
//   $.getJSON(urlAPI).done(function (data) {
//     //console.log(JSON.stringify(data));

//     var line = "";
//     $.each(data, function (k, item) {
//       console.log(item);
//       line += "<tr>";
//       line += "<td ></td>";
//       line += "<td >" + item.pl_datetimes + "</td>";
//       line += "<td >" + item.pl_description + "</td>";
//       line += "<td >" + item.pl_price + "</td>";
//       line += "<td >" + item.pl_status + "</td>";
//       line += "</tr>";
//     });
//     $("#detail").empty();
//     $("#detail").append(line);
//   });
// }

function save_payment() {
  var query = window.location.search.substring(1);
  var vars = query.split("=");
  var ID = vars[1];
  // alert("dfsdfsdfsdf");
  $("#ginfo_id").val(ID);
  $("#save_payment").click(function (e) {
    e.preventDefault();
    $("insert_db").submit();
  });

  $("#insert_db").on("submit", function (e) {
    var parameter = $(this).serializeArray();
    $("#btn_yes_add_checkout").click(function (e) {
      // console.log("1");
      console.log(parameter);
      // console.log("1");
      var url = "http://localhost/hermes/api.php/AddCheckoutsubexpense";
      $.post(url, parameter, function (response) {
        // console.log("4");
        console.log(response);
        // console.log("4");
        if (response["message"] == "success") {
          $("#modal_alert").modal("show");
        }
      });
    });
    // console.log("3");
    e.preventDefault();
  });
}

function show_payment() {
  var query = window.location.search.substring(1);
  var vars = query.split("=");
  var ID = vars[1];

  var urlAPI = "http://localhost/hermes/api.php/ShowCheckoutsubexpense/" + ID;

  $.getJSON(urlAPI).done(function (data) {
    var line = "";
    $.each(data, function (k, item) {
      console.log(item);
      line += "<tr>";
      line += "<td><button type= 'button' class='btn btn-info btn-round'>Info</button></td>";
      line += "<td>" + item.pl_datetimes + "</td>";
      line += "<td>" + item.pl_description + "</td>";
      line += "<td>" + item.pl_price + "</td>";
      line += "<td>" + item.pl_status + "</td>";
      line += "</tr>";
    });
    $("#detail").empty();
    $("#detail").append(line);

    $('#display').DataTable({

    });
  });
}

//--------------------------------------------------------[ Function Public ] ------------------------------------
function reload() {
  location.reload();
}


function base_url(path){
  var host = window.location.origin;
  // "http://localhost"
  var pathArray = window.location.pathname.split( '/' );
  // split path
  return host+"/"+pathArray[1]+"/"+path;
  // return http://localhost/hermes/+path
}
