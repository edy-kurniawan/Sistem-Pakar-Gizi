<?PHP
include "../library/db.php";

$a= $_POST["gejala"];
$c = $_POST["id"];


$query = "INSERT INTO tblgejalagangguan      
          (idgejala,idgangguan) 
VALUES ('$a','$c')";
$result = mysqli_query($db,$query)
or die(mysqli_error());

echo "Data Telah Disimpan ";
echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$c>"; 
?>