
// Validate the user input trend
function complexValidate(formObj) {

  // Check for whitespace and empty inputs for searchbar
  if ((!formObj.query.value) || (!formObj.query.value.trim())) {

    // Show the error in the search button by changing its color
    $("#query").focus(function() {
      $(this).css('border-color', '#FFFFEE');
    });
    $("#submit-button").removeClass("btn-success");
    $("#submit-button").addClass("btn-danger");
    return false;
  }
  return true;
}

function validateDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/
  return dateString.match(regEx) != null;
}

$( document ).ready(function(){

  // Display the welcome message on load for new users
  $('#welcomeModal').modal({
    keyboard: false
  });

  // Open the custom date range form for the user when selected
  $("#inputDate").click(function () {
    if ($(this).val() === "Custom Date Range") {
      $('#inputDateRange').modal('toggle');
    }
  });

  // Enable Bootstrap popovers
  $(function () {
    $('[data-toggle="popover"]').popover()
  });

  // Change the styling of the submit button when the value isn't empty
  $("#query").click(function() {
    if ($(this).value && $(this).value.trim() != "") {
      $("#submit-button").removeClass("btn-danger");
      $("#submit-button").addClass("btn-success");
    }
  });

  // Handle case where user presses enter instead of clicking submit
  $(document).keypress(function(e) {
    if(e.which == 13) {

        // If the user presses enter when the date range form is open,
        // it will submit the date range form
        if ($('#inputDateRange').hasClass('show')) {
          $("#date-range-form").submit();
        } else {

          // If the user presses enter when date range form is not open,
          // it will submit the search form
          if (!$("#query").value) {
            $("#submit-button").popover("toggle");
            $("#submit-button").addClass("btn-danger");
            $("#submit-button").removeClass("btn-success");
            $("#complex-search-form").submit();
          }

          // Re-style the button if the input is empty
          if ($(this).value && $("#query").value.trim() != "") {
            ("#complex-search-form").submit();
          } else {
            $("#submit-button").addClass("btn-danger");
            $("#submit-button").removeClass("btn-success");
          }
        }
      }
  });
});

// Validate the date range form before submission
$( "#date-range-form" ).submit(function( event ) {
  event.preventDefault();

  if (!validateDate($('#startDate').val())) {
    alert("Please enter a valid start date (yyyy-mm-dd)");
    $("#startDate").focus();
    return false;
  }
  if (!validateDate($('#endDate').val())) {
    alert("Please enter a valid end date (yyyy-mm-dd)");
    $("#endDate").focus();
    return false;
  }
  else {

    // Replace the text in the drop down date menu for the new custom date
    var startDate = new Date($('#startDate').val());
    var endDate = new Date($('#endDate').val());
    var startDateString = startDate.toDateString();
    var endDateString = endDate.toDateString();
    var dateRange = startDateString + " to " + endDateString;
    $('#inputDateRange').modal('toggle');
    $("#optionDateRange").text(dateRange);
    return true;
  }
});
