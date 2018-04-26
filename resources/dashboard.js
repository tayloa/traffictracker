$( document ).ready(function(){

  // $('#welcomeModal').modal({
  //   keyboard: false
  // });

  $("#inputDate").click(function () {
    if ($(this).val() === "Custom Date Range") {
      $('#inputDateRange').modal('toggle');
    }
  });

  $('#exampleModalLong').on('shown.bs.modal', function () {
  // $('#myInput').trigger('focus')
  });
});
