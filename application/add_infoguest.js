$(() => {
  // input test
  var query = window.location.search.substring(1);
  var vars = query.split("=");
  var ID = vars[1];
  var url = "http://localhost/hermes/api.php/ShowCheckin/" + ID;
  // input test

  // gard 12
  $.getjson(url, {
    format: "json",
  })
    .done(function (data) {
      console.log(data);
      $("#display_checkin").text(data["0"]["ginfo_in"]);
      $("#display_checkout").text(data["0"]["ginfo_out"]);
      $("#display_bookdate").text(data["0"]["bl_timestamp"]);
      $("#display_firstname").text(data["0"]["ginfo_first_name"]);
      $("#display_lastname").text(data["0"]["ginfo_last_name"]);
      $("#display_phone").text(data["0"]["ginfo_telno"]);
      $("#display_room").text(data["0"]["room_name"]);
      $("#display_type").text(data["0"]["rtype_eng"]);
      $("#display_building").text(data["0"]["building_name"]);
      $("#display_views").text(data["0"]["rview_eng"]);
    })
    .fail(function (jqxhr, testStatus, error) {
      alert("fail");
    });
});
