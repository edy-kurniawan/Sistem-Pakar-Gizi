<?PHP
include "../config.php" ;

$a= $_POST["idgejala"];
$c = $_POST["namagejala"];

mysql_query(" update tblgejala SET  
idgejala='$a',namagejala='$c' where idgejala='$a'");
header('location:media.php?mod=gejala')
?>