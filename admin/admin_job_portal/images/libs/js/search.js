// $(document).ready(function () {
//   $("#country").on("change", function () {
//     let countryId = $(this).val();
//     $.ajax({
//       method: "POST",
//       url: "_search.php",
//       data: { id: countryId },
//       dataType: "html",
//       success: function (data) {
//         $("#state").html(data);
//       },
//     });
//   });
// });

$(document).ready(function () {
  $("#country").change(function () {
    loadState($(this).find(":selected").val());
  });
  $("#state").change(function () {
    loadCity($(this).find(":selected").val());
  });
});

function loadCountry() {
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: "get=country",
  }).done(function (result) {
    $(result).each(function () {
      $("#country").append($(result));
    });
  });
}
function loadState(countryId) {
  $("#state").children().remove();
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: "get=state&countryId=" + countryId,
  }).done(function (result) {
    $("#state").append($(result));
  });
}
function loadCity(stateId) {
  $("#city").children().remove();
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: "get=city&stateId=" + stateId,
  }).done(function (result) {
    $("#city").append($(result));
  });
}

// init the countries
loadCountry();
