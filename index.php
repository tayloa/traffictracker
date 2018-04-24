<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
  include('includes/functions.inc.php'); // functions
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>

<!-- INNER HTML WILL GO HERE -->
<div class="content">
  <div class="title">
    <h1 class="logo">Traffic Tracker</h1>
  </div>
  <div>
    <h3 class="sub-text">News and data on one platform</h3>
  </div>
</div>
<div class="input-group mb-3" id="search-bar">
  <input type="text" class="form-control" placeholder="Enter a url (ex: youtube.com)" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <input class="btn btn-outline-secondary" value="Search" onclick="validate()" type="button"></input>
  </div>
</div>

<?php include('includes/foot.inc.php');
  // footer info and closing tags
?>
