<!-- <?php -->
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

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Traffic Tracker Dashboard</title>
  </head>
  <body>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="search.js"></script>
  </body>
  <footer id="footer">
    Some copyright info or perhaps some author
  </footer>
</html> -->
