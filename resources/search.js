function validate(formObj) {
  if (formObj.query.value === "") {
    $("#query").focus(function() {
      $(this).css('border-color', '#FFFFEE');
    });
    $( "#search-form" ).effect("shake");
    $("#submit-button").toggleClass("btn-danger","btn-success");
    return false;
  }
  return true;
}

$( document ).ready(function() {

  // Initialize pop overs
  $(function () {
    $('[data-toggle="popover"]').popover()
  });

  $( "#toggle" ).toggle( "scale" );

  $("#query").click(function() {
    $("#submit-button").toggleClass("btn-danger","btn-success");
  });
});
