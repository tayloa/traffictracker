function complexValidate(formObj) {
  if ((!formObj.query.value) || (!formObj.query.value.trim())) {
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

// $( document ).ready(function(){
//   $('#welcomeModal').modal({
//     keyboard: false
//   });

  alert($("#inputDate").val(),$("#dateRange").val());

  $("#inputDate").click(function () {
    if ($(this).val() === "Custom Date Range") {
      $('#inputDateRange').modal('toggle');
    }
  });

  $(function () {
    $('[data-toggle="popover"]').popover()
  });

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
          $("#complex-search-form").submit();
        }
        if ($("#query").value.trim() != "") {
          ("#complex-search-form").submit();
          alert();
        } else {
          $("#submit-button").removeClass("btn-danger");
          $("#submit-button").addClass("btn-success");
        }
      }
  });

  $( "#date-range-form" ).submit(function( event ) {
      event.preventDefault();

      if (!validateDate($('#startDate').val())) {
        alert("Please enter a valid start date (yyyy-mm-dd)");
        startDate.focus();
        return false;
      }
      if (!validateDate($('#endDate').val())) {
        alert("Please enter a valid end date (yyyy-mm-dd)");
        endDate.focus();
        return false;
      }
      else {
        var startDate = new Date($('#startDate').val());
        if (!startDate.isValid()) {
          alert("Please enter a valid start date (yyyy-mm-dd)");
          startDate.focus();
          return false;
        }

        var endDate = new Date($('#endDate').val());
        if (!endDate.isValid()) {
          alert("Please enter a valid end date (yyyy-mm-dd)");
          endDate.focus();
          return false;
        }

        var startDateString = startDate.toDateString();
        var endDateString = endDate.toDateString();
        var dateRange = startDateString + " to " + endDateString;
        $('#inputDateRange').modal('toggle');
        $("#optionDateRange").text(dateRange);
        return true;
      }
});
