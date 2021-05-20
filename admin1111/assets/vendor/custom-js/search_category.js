$(function () {
  $("#categoryNameList").autocomplete({
    source: function (request, response) {
      $.ajax({
        url: "category_search.php",
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
      $("#categoryNameList").val(ui.item.label); // display the selected text
      $("#categoryIdList").val(ui.item.value); // save selected id to input
      return false;
    },
    focus: function (event, ui) {
      $("#categoryNameList").val(ui.item.label);
      $("#categoryIdList").val(ui.item.value);
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
