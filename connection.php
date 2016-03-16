<?php

$username = "root";
$password = "1234";
$hostname = "localhost";
$db = "viestiseina";

/*
$dbhandle = mysqli_connect($hostname, $username, $password, $db)
  or die("Unable to connect to MySQL");
*/
$mysqli = new mysqli($hostname, $username, $password, $db)
  or die("Unable to connect mysqli!");
/*
$selected = mysqli_select_db($dbhandle, "viestiseina")
  or die("Could not select examples");
*/
?>
