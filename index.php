<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
  include('includes/functions.inc.php'); // functions
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>

<?php
  // Now let's process our form:
  // Have we posted?
  // $havePost = isset($_POST["save"]);
  //
  // // Let's do some basic validation
  // $errors = '';
  // if ($havePost) {
  //
  //   // Get the output and clean it for output on-screen.
  //   // First, let's get the output one param at a time.
  //   // Could also output escape with htmlentities()
  //   $url = $_POST["url"];
  //
  //
  //   $focusId = ''; // trap the first field that needs updating, better would be to save errors in an array
  //
  //   if ($url == '') {
  //     $errors .= '<li>Please enter an address</li>';
  //     if ($focusId == '') $focusId = '#url';
  //   }

    // if ($errors != '') {
    //   echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
    //   echo $errors;
    //   echo '</ul></div>';
    //   echo '<script type="text/javascript">';
    //   echo '  $(document).ready(function() {';
    //   echo '    $("' . $focusId . '").focus();';
    //   echo '  });';
    //   echo '</script>';
    // } else {
    //   if ($dbOk) {
    //     // Let's trim the input for inserting into mysql
    //     // Note that aside from trimming, we'll do no further escaping because we
    //     // use prepared statements to put these values in the database.
    //     $firstNamesForDb = trim($_POST["firstNames"]);
    //     $lastNameForDb = trim($_POST["lastName"]);
    //     $dobForDb = trim($_POST["dob"]);
    //
    //     // Setup a prepared statement. Alternately, we could write an insert statement - but
    //     // *only* if we escape our data using addslashes() or (better) mysqli_real_escape_string().
    //     $insQuery = "insert into actors (`last_name`,`first_names`,`dob`) values(?,?,?)";
    //     $statement = $db->prepare($insQuery);
    //     // bind our variables to the question marks
    //     $statement->bind_param("sss",$lastNameForDb,$firstNamesForDb,$dobForDb);
    //     // make it so:
    //     $statement->execute();
    //
    //     // give the user some feedback
    //     echo '<div class="messages"><h4>Success: ' . $statement->affected_rows . ' actor added to database.</h4>';
    //     echo $firstNames . ' ' . $lastName . ', born ' . $dob . '</div>';
    //
    //     // close the prepared statement obj
    //     $statement->close();
    //   }
    // }
  // }
?>

<div class="content">
  <div class="title">
    <h1 class="logo"><i class="fas fa-car"></i> Traffic Tracker</h1>
  </div>
  <div>
    <h3 class="sub-text">News and data on one platform</h3>
  </div>
</div>

<form  id="search-form" name="search-form" action="dashboard.php" method="post" onsubmit="validate();">
  <div class="form-group">
    <div class="input-group mb-3" id="search-bar">
      <input type="text" class="form-control" placeholder="Enter a url (ex: youtube.com)"
      value="<?php if($havePost && $errors != '') { echo $url; } ?>" name="url" id="url" aria-label="URL" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button type="submit" class="btn btn-outline-secondary">Search</button>
      </div>
    </div>
  </div>
</form>


  <!-- <form  class="input-group mb-3" id="search-form" name="search-form" action="dashboard.php" method="post" onsubmit="return validate(this);">
  <fieldset>
    <div class="formData">

      <input type="text" class="form-control" placeholder="Enter a url (ex: youtube.com)"
      value="<?php if($havePost && $errors != '') { echo $url; } ?>" name="url" id="url"/>
      <div class="input-group-append">
        <input class="btn btn-outline-secondary" value="Search" type="submit" name="save" onclick="validate()" type="button"></input>
      </div>
    </div> -->
  <!-- </fieldset> -->
<!-- </form> -->

<!-- </form> -->
</div>

<?php include('includes/foot.inc.php');
  // footer info and closing tags
?>
