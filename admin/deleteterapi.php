<?PHP

include "../library/db.php";

$idterapi = $_GET['idterapi'];


$sql = "Delete from tblsolusi WHERE  idsolusi='".$idterapi."'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysqli_query($db,$sql) or die("Invalid query: " . mysqli_error());
}

header ('location:media.php?mod=solusi');
?>


