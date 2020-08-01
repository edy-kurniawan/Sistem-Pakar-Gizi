<?PHP
include "../library/db.php";

$a= $_POST["idgejala"];
$c = $_POST["namagejala"];

mysqli_query($db,"update tblgejala SET  
idgejala='$a',namagejala='$c' where idgejala='$a'");
header('location:media.php?mod=gejala')
?>