<?php
include 'connection.php';
$sana = "";

if($_POST['salasana'] == "test") {
  $sana = "test1";
  header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style/style.css">
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
      <form action="" method="post"><br><br><br><br><br>
        Salasana <input autocomplete="off" name="salasana" type="text" />
        <input type="submit" value="Mene" />
      </form>
    </div>

    <div id="footer">
          &copy; All rights reserved 2016 TupeDD&trade;
    </div>

  </div>

</body>
</html>
