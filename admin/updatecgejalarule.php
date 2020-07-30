<?PHP
include "../config.php" ;

$a= $_POST["gejala"];
$c = $_POST["id"];


$query = "INSERT INTO tblgejalagangguan      
          (idgejala,idgangguan) 
VALUES ('$a','$c')";
$result = mysql_query($query)
or die(mysql_error());

echo "Data Telah Disimpan ";
echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$c>"; 
?>