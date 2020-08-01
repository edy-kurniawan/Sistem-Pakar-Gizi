<?php
include "../library/db.php";

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$query = "INSERT INTO tblgejala (idgejala,namagejala,tingkatgizi) VALUES ('$a','$b','$c')";
$result = mysqli_query($db,$query) or die(mysqli_error());

echo "Data Telah Disimpan ";


header ('location:media.php?mod=gejala');

?>
