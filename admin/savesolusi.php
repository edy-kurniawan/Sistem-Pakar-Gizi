<?php
include "../config.php";
$a = $_POST['a'];
$e = $_POST['c'];

$query = "INSERT INTO tblsolusi VALUES ('$a','$e')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=solusi');

?>
