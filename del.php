<?php
include 'connection.php';

$x = intval($_POST["n"]);
$lista = "DELETE FROM viestit WHERE viesti='$viesti'";
if ($mysqli->query($lista) == true) {
  //header("Location: index.php");
  echo "Worked!!!";
}
else {
  //header("Location: admin.php");
  echo "<a>Error while trying to delete record</a>";
}
