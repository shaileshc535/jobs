$(function () {
  $("#brandNameList").autocomplete({
    source: function (request, response) {
      $.ajax({
        url: "brand_search.php",
        type: "post",
        dataType: "json",
        data: {
          search: request.term,
        },
        success: function (data) {
          response(data);
        },
      });
    },
    select: function (event, ui) {
      $("#brandNameList").val(ui.item.label); // display the selected text
      $("#brandIdList").val(ui.item.value); // save selected id to input
      return false;
    },
    focus: function (event, ui) {
      $("#brandNameList").val(ui.item.label);
      $("#brandIdList").val(ui.item.value);
      return false;
    },
  });
});

function split(val) {
  return val.split(/,\s*/);
}

function extractLast(term) {
  return split(term).pop();
}
