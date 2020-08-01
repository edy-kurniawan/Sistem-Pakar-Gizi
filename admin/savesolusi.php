<?php
include "../library/db.php";
$a = $_POST['a'];
$e = $_POST['c'];

$query = "INSERT INTO tblsolusi (idsolusi,keterangansolusi) VALUES ('$a','$e')";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=solusi');

?>
