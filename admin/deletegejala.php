<?PHP

include "../library/db.php" ;

$idgejala = $_GET['idgejala'];


$sql = "Delete from tblgejala WHERE  idgejala='".$idgejala."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysqli_query($db,$sql) or die("Invalid query: " . mysqli_error());
}
header('location:media.php?mod=gejala')
?>


