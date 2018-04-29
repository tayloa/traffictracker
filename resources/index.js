function validate(formObj) {
  if ((!formObj.query.value) || (!formObj.query.value.trim())) {
    $("#query").focus(function() {
      $(this).css('border-color', '#FFFFEE');
    });
    $( "#search-form" ).effect("shake");
    $("#submit-button").removeClass("btn-success");
    $("#submit-button").addClass("btn-danger");
    return false;
  }
  return true;
}

$( document ).ready(function() {

  // Initialize pop overs
  $(function () {
    $('[data-toggle="popover"]').popover()
  });
  $("#sub-text").hide(0).fadeIn(4000);

  $("#query").click(function() {
    if ($(this).value.trim() != "") {
      $("#submit-button").removeClass("btn-danger");
      $("#submit-button").addClass("btn-success");
    }
  });
});
