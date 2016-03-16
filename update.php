<?php
include 'connection.php';

$x = intval($_GET["n"]);
$update = "UPDATE viestit SET permission='yes' WHERE viesti='$viesti'";
if ($mysqli->query($update) == true) {

  echo "Worked!!";
  //header("Location: index.php");
}
else {
  //header("Location: admin.php");
  echo "<a>Error while trying to UPDATE record</a>";
}
