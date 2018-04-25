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
    <h1 class="logo animated bounceInDown"><i class="fas fa-archive infinite pulse"></i> Trend Tracker</h1>
  </div>
</div>

<form>
  <div class="form-row">
    <div class="form-group col-sm-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-sm-1">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option>Past hour</option>
        <option>Past 4 hours</option>
        <option>Past day</option>
        <option>Past Week</option>
        <option>Past Month</option>
        <option>Past 3 Months</option>
        <option selected>Past Year</option>
        <div class="dropdown-divider"></div>
        <option>Custom Time Range</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<?php
  include('includes/embed.inc.php');
  // include global css, javascript, end the head and open the body
?>


<?php include('includes/foot.inc.php');
?>
