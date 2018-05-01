<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>

<?php

session_start();

?>

<div class="content">
  <div class="title">
    <a id="logo" href="dashboard.php"><h1 class="logo animated bounceInDown"><i class="fas fa-chart-line"></i>Trend Tracker</h1></a>
  </div>
</div>

<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModal" aria-hidden="true">
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
          Trend Tracker is a platform in which you can view a trend's history across
          different websites and applications. Currently we support trend tracking on Google,
          Twitter. RSS and Instagram feeds are works in progress. Enter a trend in the search bar to get started!
          Then click on a feed card to view the results.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Get Started</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <form id="complex-search-form" action="dashboard.php" onsubmit="return complexValidate(this);">

    <div class="row justify-content-md-center">
      <div class="col input-group mb-3">
        <input type="text" class="form-control" placeholder="Enter a topic"
        value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
          data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#complex-search-form").submit()'>
          <i class="fas fa-search"></i>
          </a>
        </div>
      </div>

    </div>

    <div class="form-row">
      <div class="form-group col-md-auto">
        <select id="inputDate" class="form-control">
          <option>Past Day</option>
          <option>Past Week</option>
          <option selected>Past Month</option>
          <option id="optionDateRange" data-toggle="modal" data-target="#inputDateRange">Custom Date Range</option>
        </select>
      </div>
  </form>
</div>

<div class="modal fade" id="inputDateRange" tabindex="-1" role="dialog" aria-labelledby="inputDateRange" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enter a Date Range</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="date-range-form">
          <div class="form-group">
            <label for="startDate">Start date</label>
            <div class="value"><input type="text" size="10" maxlength="10" value="" name="startDate" id="startDate"/> <em>yyyy-mm-dd</em></div>
            <label for="endDate">End date</label>
            <div class="value"><input type="text" size="10" maxlength="10" value="" name="endDate" id="endDate"/> <em>yyyy-mm-dd</em></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick='$("#date-range-form").submit()'>Save range</button>
      </div>
    </div>
  </div>
</div>

<?php
include('includes/embed.inc.php');
?>


<?php include('includes/foot-dashboard.inc.php');

// This code sets the input value of the query by pulling the
//form input from index.php
$queryValue = $_GET['query'];
echo "<script type=text/javascript> $('#query').val('{$queryValue}'); </script>";
?>
