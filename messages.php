<?php
include 'connection.php';

$result = $mysqli->query("SELECT aika, user, viesti FROM viestit WHERE permission='yes'", MYSQLI_USE_RESULT);

while ($row = mysqli_fetch_array($result)) {
echo "<p style='color:white;'>[".$row{'aika'}."] <a style='color:red;'>".$row{'user'}."</a>
".$row{'viesti'}."<br></p>";
}
