<?php
include 'connection.php';
if (isset($_POST['button1'])) {

  $teksti = htmlspecialchars($_POST['textarea']);
  $nimi = htmlspecialchars($_POST['nimi']);
  if ($teksti != "") {
    if ($nimi == "") {
      $nimi = "Tuntematon";
    }
    $add = "INSERT INTO viestit (user, viesti) VALUES ('$nimi', '$teksti')";

    if ($mysqli->query($add) == true) {
      echo "<a>Viesti lähetettiin onnistuneesti.</a>";
      header('Location: index.php');
    } else {
      echo "<p>Error!!!</p>";
    }
  }
  else {
    echo "<a style='color:red;'>Viestialue on tyhjä!</a>";
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
      <a href="index.php">Etusivu</a><br><br><br><br>
    </div>

    <div id="laheta">
      <form method="post" action='viesti.php'>
        <input maxlength="20" placeholder="Käyttäjänimi" type="text" id="nimi" name="nimi" />
        <input type="submit" name="button1"  value="Lähetä" />
    </div>

  </div><br /><br />

  <div id="section">
    <textarea style="font-size:25px;" id="textarea" name="textarea" maxlength="100" placeholder=" Kirjoita viesti " rows="5" cols="18"></textarea>
  </div>
  </form>

  <div id="footer">
        &copy; All rights reserved 2016 TupeDD&trade;
  </div>

</div>

</body>
</html>
