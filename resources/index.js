// Validate the user trend input
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

  // Initialize Bootstrap pop overs
  $(function () {
    $('[data-toggle="popover"]').popover()
  });

  // Fade in the subtext
  $("#sub-text").hide(0).fadeIn(4000);

  // Change the style of the submit button based on input
  $("#query").click(function() {
    if ($(this).value.trim() != "") {
      $("#submit-button").removeClass("btn-danger");
      $("#submit-button").addClass("btn-success");
    }
  });

  // Handle case where user presses enter instead of clicking submit
  $(document).keypress(function(e) {
    if(e.which == 13) {
        if (!$("#query").value) {
          $("#submit-button").popover("toggle");
          $("#submit-button").addClass("btn-danger");
          $("#submit-button").removeClass("btn-success");
          $("#search-form").submit();
        }
        if ($("#query").value.trim() != "") {
          ("#search-form").submit();
          alert();
        } else {
          $("#submit-button").removeClass("btn-danger");
          $("#submit-button").addClass("btn-success");
        }
      }
  });
});
