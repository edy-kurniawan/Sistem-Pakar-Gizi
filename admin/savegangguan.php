<?php
include "../library/db.php";
$a = $_POST['a'];
$d = $_POST['b'];

$query = "INSERT INTO tbltingkat_gizi      
          (id_tingkatgizi,nama_tingkatgizi) 
VALUES ('$a','$d')";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "<script>
		alert('Data tersimpan')
	</script>";

header ('location:media.php?mod=penyakit');

?>
