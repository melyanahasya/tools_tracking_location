<?php 
$filesaya = fopen("location.txt", "w") or die("error");
$txt = "https://maps.google.com/?q=" . $_GET['lat'] . "," . $_GET['long'];
fwrite($filesaya, $txt);
fclose($filesaya);

?>