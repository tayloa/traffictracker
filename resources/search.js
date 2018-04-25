function validate(formObj) {
  if (formObj.query.value === "") {
    $("#query").focus(function() {
      $(this).css('border-color', '#FFFFEE');
    });
    $( "#search-form" ).effect("shake");
    $( "#submit-button" ).css( "background",'red' );
    // data-toggle="popover"
    // data-trigger="focus"
    // data-content="And here's some amazing content. It's very engaging. Right?"
    return false;
  }
  return true;
}

$( document ).ready(function() {
  $(function () {
  $('[data-toggle="popover"]').popover()
  });
  $("#query").focus();

  $("#query").click(function() {
    $( "#submit-button" ).css( "background",'green' );
  });
});
