<?php
include "../library/db.php";
$a = $_POST['a'];
$b = $_POST['b'];

$query = "DELETE FROM tbltingkatgizi_solusi WHERE idtingkatgizi = '$b' AND idsolusi = '$a'";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=rule');

?>
