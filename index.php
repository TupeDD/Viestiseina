<?php
include 'connection.php';
$page = "admin.php";
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
<body onload="messages()">

<div id="header"><br />
<h1><a onmouseover="window.status='';" onmouseout="window.status='';" style="padding:0px; cursor:text; font-size:50px; background-color:black;" href="<?php echo $page; ?>">V</a>iestiseinä</h1><br>
</div>

<div id="all">

  <div id="nav">

    <div id="etusivu">
      <a href="viesti.php">Kirjoita viesti</a>
    </div>

  </div><br /><br />

  <div id="section">
    <script>
    function messages(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","messages.php?q="+str,true);
        xmlhttp.send();
    }
  }
    </script>

    <?php
    $result = $mysqli->query("SELECT aika, user, viesti FROM viestit WHERE permission='yes'", MYSQLI_USE_RESULT);

    while ($row = mysqli_fetch_array($result)) {
    echo "<p style='color:white;'>[".$row{'aika'}."] <a style='color:red;'>".$row{'user'}."</a>
    ".$row{'viesti'}."<br></p>";
    }

    ?>
    <a id="txtHint"></a>
  </div>

  <div id="footer">
        &copy; All rights reserved 2016 TupeDD&trade;
  </div>

</div>

</body>
</html>
