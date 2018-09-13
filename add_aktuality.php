<meta http-equiv="refresh" content="2;url=index.php">
<?php
	require 'connect.php';
  $nazev =$_POST['nazev'];
  $text = $_POST['text'];
  $zaznam = "INSERT INTO aktuality (nazev, text) VALUES ('$nazev','$text')";
  
  if ($spojeni-> query($zaznam) === TRUE) {
    echo 'Článek byl přidán';
    }
    else {
    echo 'Error:' ,$zaznam,'<br>',$spojeni->error;
    }
?>