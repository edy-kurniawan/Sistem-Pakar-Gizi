<?PHP
include "../config.php" ;

$a= $_POST["t"];
$c = $_POST["id"];

$query = "INSERT INTO tblgangguanterapi     
          (idterapi,idgangguan) 
VALUES ('$a','$c')";
$result = mysql_query($query)
or die(mysql_error());

echo "<meta http-equiv=Refresh content=1;url=media.php?mod=tambahrulegejala&id=$c>"; 
?>