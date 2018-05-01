function make_google_script (formObj){
   var graph_element = $("#trends-block");

   var script = document.createElement('script');
   script.type = 'text/javascript';
   script.src = "https://ssl.gstatic.com/trends_nrtr/1386_RC02/embed_loader.js";
   var search = formObj.query.value;
   console.log(search);
   var query_string = '';
   var range;

   switch (formObj.inputDate.value) {
      case "Past Day":
         range = 'now 1-d';
         break;
      case "Past Week":
         range = 'now 7-d';
         break;
      case "Past Month":
         range = 'today 1-m';
         break;
      case "Past Year":
         range = 'today 12-m';
         break;
      default:
         range = 'today 1-m';
         break;
   }

   var script_out = '<script type="text/javascript">" trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"';

   script_out += search;

   script_out += '","geo":"","time":"';

   script_out += range;

   script_out += '"}],"category":0,"property":""}, {"exploreQuery":"q='

   for (var i = 0; i < search.length; i++) {
      if (search[i] != ' ') {
         query_string += search[i];
      } else {
         query_string += '%20';
      }
   }

   script_out += query_string;

   script_out += '&date=' + range;

   script_out =+ '","guestPath":"https://trends.google.com:443/trends/embed/"}); </script>';
   graph_element.html(script_out);
   // console.log(script);
}
