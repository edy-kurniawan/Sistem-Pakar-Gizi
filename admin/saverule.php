<?php
include "../config.php";
$a = $_POST['a'];
$b = $_POST['b'];

$query = "INSERT INTO tbltingkatgizi_solusi      
          (idtingkatgizi,idsolusi) 
VALUES ('$b','$a')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=rule');

?>
