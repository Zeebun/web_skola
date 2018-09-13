<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Vkládání aktualit</title>
    <meta charset='utf-8'>
  </head>
  <body>
     <form action="add_aktuality.php" method="post">
       Název aktuality<br>
       <input type="text" name="nazev"><br>
       Text aktuality<br>
       <textarea name="text" rows="20" cols="50"></textarea><br>
       <input type="submit" value="Publikovat">
     </form>
  </body>
</html>