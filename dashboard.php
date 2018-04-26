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
        <select id="inputState" class="form-control">
          <option>Past Hour</option>
          <option>Past 4 Hours</option>
          <option>Past Day</option>
          <option>Past Week</option>
          <option>Past Month</option>
          <option>Past 3 Months</option>
          <option selected>Past Year</option>
          <option>Custom Time Range</option>
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

  <!-- <div class="form-row">
    <div class="form-group col-lg-5">
      <div class="input-group mb-3" id="search-bar">
        <input type="text" class="form-control" placeholder="Enter a topic"
        value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
          data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#search-form").submit()'>Search</a>
        </div>
      </div>
    </div>
    <div class="form-group col-sm-1">
      <select id="inputState" class="form-control">
        <option>Past Hour</option>
        <option>Past 4 Hours</option>
        <option>Past Day</option>
        <option>Past Week</option>
        <option>Past Month</option>
        <option>Past 3 Months</option>
        <option selected>Past Year</option>
        <option>Custom Time Range</option>
      </select>
    </div>
  </div>
</form> -->

<?php
include('includes/embed.inc.php');
// include global css, javascript, end the head and open the body
?>


<?php include('includes/foot.inc.php');
?>
