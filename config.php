<?php
require "mysql_mysqli.inc.php";

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pakar_gizi";

$koneksi = mysql_connect($db_host, $db_user, $db_pass);
$db = mysql_select_db($db_name, $koneksi);
// if($db){
// 	echo true;
// }
// else{
// 	echo false;
// }
//if(mysqli_connect_errno()){
//	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
//}
?>