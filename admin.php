<?php
include 'connection.php';

function delete() {
  $del = "DELETE FROM viestit WHERE viesti='$viesti'";
  if ($mysqli->query($del) == TRUE) {
    echo "<a>Viesti on poistettu</a>";
  }
  else {
    echo "<a>Error while trying to delete record</a>";
  }
}
function update() {
  $update = "UPDATE viestit SET permission='yes' WHERE viesti='$viesti'";
  if ($mysqli->query($update) == TRUE) {
    echo "<a>Viesti on hyväksytty.</a>";
  }
  else {
    echo "<a>Error while updating record</a>";
  }
}
if (isset($_POST['button2'])) {
  $del = "DELETE FROM viestit WHERE viesti='$viesti'";
  if ($mysqli->query($del) == true) {
      echo "Record deleted";
  }
  else {
    echo "Error while trying to delete record";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>

  <div id="header"><br />
  <h1>Viestiseinä</h1><br>
  </div>

  <div id="all">

    <div id="nav">

      <div id="etusivu">
        <a href="index.php">Etusivu</a>
      </div>

    </div><br /><br />

    <div id="section">

      <?php
      $result = $mysqli->query("SELECT user, viesti FROM viestit WHERE permission='no'", MYSQLI_USE_RESULT);
      $n = 0;
      while ($row = mysqli_fetch_array($result)) {
        echo "<p style='color:white;'><a style='color:red;'>".$row{'user'}."</a>
        ".$row{'viesti'}."<br><a href=''update.php?n='.$n' style='color:lightgreen;'>Hyväksy</a>"."<a style='color:yellow;' href=''del.php?n='.$n++'>Poista</a>"."<br></p>";
      }
      ?>
    </div>

    <div id="footer">
          &copy; All rights reserved 2016 TupeDD&trade;
    </div>

  </div>

</body>
</html>
