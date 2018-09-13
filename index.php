<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Gymnázium a SOŠ Jilemnice</title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <link rel="stylesheet" href="styl.css" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  </head>
  <body>
      <?php
        require 'connect.php';
        ?>

   <div id="cele">

    <div id="hlava" class="hlava">
     <h1>Gymnázium a SOŠ Jilemnice</h1>
    </div>

    <div id="menu" class="menu">     
     <ul>
      <li><a href="#home">ÚVOD</a></li>
      <li><a href="#news">ŠKOLA</a></li>
      <li><a href="#contact">STUDIUM</a></li>
      <li><a href="#about">SPORTOVNÍ GYMNÁZIUM</a></li>
      <li><a href="#about">SOŠ</a></li>
      <li><a href="#about">STUDENTSKÝ PARLAMENT</a></li>
      <li><a href="#about">ŠKOLSKÁ RADA</a></li>
     </ul>
    </div>

    <div id="obsah" class="obsah">   
      <h3>Aktuality:</h3>
      <?php
         require 'aktuality.php';
      ?>
      <hr>
    </div> 

    <div id="odkazy" class="odkazy">
    </div>
   </div>
  </body>
</html>