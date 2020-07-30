<?PHP

include "../config.php" ;

$idgejala = $_GET['idgejala'];


$sql = "Delete from tblgejala WHERE  idgejala='".$idgejala."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
}
header('location:media.php?mod=gejala')
?>


