<?php include "../config.php";

$id = $_GET["id"]; 
$a = $_POST["id_tingkatgizi"];
$b = $_POST["nama_tingkatgizi"];

// mysql_query(" update tbltingkat_gizi SET id_tingkatgizi='$a',nama_tingkatgizi='$b' where id_tingkatgizi='$a'");

// header ('location:media.php?mod=penyakit');

$query = "UPDATE tbltingkat_gizi SET id_tingkatgizi='$a', nama_tingkatgizi='$b' where id_tingkatgizi='$id'";
// echo $query;
$result = mysql_query($query)
or die(mysql_error());

echo "<script>
		alert('Data tersimpan')
	</script>";

header ('location:media.php?mod=penyakit');

?>