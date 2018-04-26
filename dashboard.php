<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>
<!-- <form  id="complex-search-form" name="compex-search-form" action="dashboard.php" method="post" onsubmit="return validate(this);">
  <div class="form-group">
    <div class="input-group mb-3" id="search-bar">
      <a href="#" class="btn btn-secondary" data-toggle="popover" data-placement="top" data-trigger="hover"
      data-content="Enter a topic to query and we'll send you its trend data.">
        <i class="fas fa-question"></i>
      </a>
      <input type="text" class="form-control" placeholder="Enter a topic"
      value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
        data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#search-form").submit()'>Search</a>
      </div>
    </div>
  </div>
  </div>
</form> -->

<div class="content">
  <div class="title">
    <h1 class="logo animated bounceInDown"><i class="fas fa-chart-line"></i>Trend Tracker</h1>
  </div>
</div>

<div class="container">
  <form id="complex-search-form">

    <div class="row justify-content-md-center">
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter a topic"
        value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-auto">
        <select id="inputDate" class="form-control">
          <option>Past Day</option>
          <option>Past Week</option>
          <option>Past Month</option>
          <option selected>Past 30 Days</option>
          <option data-toggle="modal" data-target="#exampleModalLong">Custom Date Range</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <div class="input-group-append">
          <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
          data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#search-form").submit()'>Search</a>
        </div>
      </div>
  </form>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeMOdal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Welcome to Trend Tracker!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Trend Tracker is a platform in which you can view a trends appearance across
          different websites and social media platforms. Currently we support trend
          filtering for Google, Twitter, RSS, and Instagram. The furthest range we display is currently
          30 days, but that will change as we further develop the application.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Get Started</button>
      </div>
    </div>
  </div>
</div>
<?php
include('includes/embed.inc.php');
// include global css, javascript, end the head and open the body
?>


<?php include('includes/foot-dashboard.inc.php');
?>
