<?PHP

include "../config.php" ;

$idterapi = $_GET['idterapi'];


$sql = "Delete from tblsolusi WHERE  idsolusi='".$idterapi."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
}

header ('location:media.php?mod=solusi');
?>


