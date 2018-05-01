// $(document).ready(function() {
//    $.ajax({
//       type: "GET",
//       url: "teslafeed.xml",
//       dataType: "xml",
//       success: function(responseData, status){
//          var output = "<ul>";
//       $(responseData).find("item").each(function() {
//          output += '<li><a href="' + $(this).find("link").text() + '" target="_blank">';
//          output += $(this).find("description").text();
//          output += '</a></li>';
//          output += "<div id='date'>" + $(this).find("pubDate").text() + "</div><br />";
//       });
//       output += "</ul>";
//       $('#rss-block').html(output);
//       }, error: function(msg) {
//       // there was a problem
//       alert("There was a problem: " + msg.status + " " + msg.statusText);
//       }
//    });
// });
