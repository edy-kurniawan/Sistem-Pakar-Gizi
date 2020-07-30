<?PHP include "../config.php";

$a = $_POST["idterapi"];
$c= $_POST["keteranganterapi"];

mysql_query(" update tblsolusi SET  
idsolusi='$a',keterangansolusi='$c' where idsolusi='$a'");

header ('location:media.php?mod=solusi');
?>