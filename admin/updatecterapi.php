<?PHP 
include "../library/db.php";

$a = $_POST["idterapi"];
$c= $_POST["keteranganterapi"];

mysqli_query($db,"update tblsolusi SET  
idsolusi='$a',keterangansolusi='$c' where idsolusi='$a'");

header ('location:media.php?mod=solusi');
?>