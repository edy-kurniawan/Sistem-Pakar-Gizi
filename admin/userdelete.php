<?php session_start() ;ob_start(); 
include "../config.php" ; 

$vusername = $_GET['username'];

$sql = "Delete from user WHERE  id_user='$vusername'";
if (isset($sql) && !empty($sql)) { echo "<!--" . $sql . "-->";
$result = mysql_query($sql) or die("Invalid query: " . mysql_error());


  header('location:media.php?mod=pasien');
		}
	?>