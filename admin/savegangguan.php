<?php
include "../config.php";
$a = $_POST['a'];
$d = $_POST['b'];

$query = "INSERT INTO tbltingkat_gizi      
          (id_tingkatgizi,nama_tingkatgizi) 
VALUES ('$a','$d')";
$result = mysql_query($query)
or die(mysql_error());

echo "<script>
		alert('Data tersimpan')
	</script>";

header ('location:media.php?mod=penyakit');

?>
