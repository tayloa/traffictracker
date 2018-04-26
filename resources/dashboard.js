function validateDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  return dateString.match(regEx) != null;
}

$( "#date-range-form" ).submit(function( event ) {
    event.preventDefault();
    var startDate = $('#startDate');
    var endDate = $('#endDate');
    var fail = true;

    if (!validateDate(startDate.val())) {
      alert("Please enter a valid start date (yyyy-mm-dd)");
      startDate.focus();
      return false;
    }
    if (!validateDate(endDate.val())) {
      alert("Please enter a valid end date (yyyy-mm-dd)");
      endDate.focus();
      return false;
    }
    else {
      console.log(startDate,endDate);
      var dateRange = startDate.val() + " to " + endDate.val();
      $('#inputDateRange').modal('toggle');
      $("#optionDateRange").text(dateRange);
      return true;
    }
});

$( document ).ready(function(){

  // $('#welcomeModal').modal({
  //   keyboard: false
  // });

  $("#inputDate").click(function () {
    if ($(this).val() === "Custom Date Range") {
      $('#inputDateRange').modal('toggle');
    }
  });

});
