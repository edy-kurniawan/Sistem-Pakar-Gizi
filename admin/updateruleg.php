<?PHP
include "../config.php" ;

$a= $_GET["g"];
$id = $_GET["id"];

$sql = "Delete from tblgejalagangguan WHERE  idgangguan='".$id."' AND idgejala='".$a."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
}
echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$id>"; 
?>