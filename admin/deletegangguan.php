<?PHP

include "../config.php" ;

$id_tingkatgizi = $_GET['id_tingkatgizi'];


$sql = "Delete from tbltingkat_gizi WHERE  id_tingkatgizi='".$id_tingkatgizi."'";
// if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
// $result = mysql_query($sql) or die("Invalid query: " . mysql_error());
// }
// header ('location:media.php?mod=penyakit');
$result = mysql_query($sql) or die(mysql_error());

header ('location:media.php?mod=penyakit');
?>


