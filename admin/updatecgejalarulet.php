<?PHP
include "../library/db.php";

$a= $_POST["t"];
$c = $_POST["id"];

$query = "INSERT INTO tblgangguanterapi     
          (idterapi,idgangguan) 
VALUES ('$a','$c')";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$c>"; 
?>