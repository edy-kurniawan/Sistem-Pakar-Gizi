<?php
include "../config.php";
$a = $_POST['a'];
$d = $_POST['b'];
$e = $_POST['c'];

$query = "INSERT INTO tblgejala       
          (idgejala,namagejala) 
VALUES ('$a','$e')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=gejala');

?>
