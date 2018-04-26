$( document ).ready(function(){

  $('#welcomeModal').modal({
    keyboard: false
  })
//   $('#myModal').on('shown.bs.modal', function () {
//   $('#myInput').trigger('focus')
// })

  $("#inputDate").click(function () {
    if ($(this).val() === "Custom Date Range") {
      $('#exampleModalLong').modal('toggle')
    }
  });

  $('#exampleModalLong').on('shown.bs.modal', function () {
  // $('#myInput').trigger('focus')
  });
});
