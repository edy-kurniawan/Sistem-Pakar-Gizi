<?php
include "../library/db.php";
$a = $_POST['a'];
$b = $_POST['b'];

$query = "INSERT INTO tbltingkatgizi_solusi      
          (idtingkatgizi,idsolusi) 
VALUES ('$b','$a')";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "Data Telah Disimpan ";

header ('location:media.php?mod=rule');

?>
