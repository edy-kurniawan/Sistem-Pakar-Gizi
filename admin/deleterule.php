<?php
include "../config.php";
$a = $_POST['a'];
$b = $_POST['b'];

$query = "DELETE FROM tbltingkatgizi_solusi WHERE idtingkatgizi = '$b' AND idsolusi = '$a'";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=rule');

?>
