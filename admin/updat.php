<?PHP
include "../config.php" ;

$t= $_GET["t"];
$id = $_GET["id"];

$sql = "Delete from tblgangguanterapi WHERE  idterapi='".$t."' AND idgangguan='".$id."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
}

echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$id>"; 
?>