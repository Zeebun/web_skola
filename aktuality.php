<?php
$zaznam="SELECT * FROM aktuality order by nazev asc";
$vysledek = mysqli_query($spojeni,$zaznam);

while($zaznam=MySQLi_Fetch_Array($vysledek))
{
echo '<h3>',$zaznam['nazev'],'</h3>';
echo '',$zaznam['text'];
}
mysqli_close($spojeni);
?>  