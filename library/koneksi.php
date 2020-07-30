<?php
require "mysql_mysqli.inc.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pakar_gizi";

$koneksi = mysql_connect($db_host, $db_user, $db_pass);
$db = mysql_select_db($db_name, $koneksi);

// if ($db) {
// 	echo "ada";
// }else{
// 	echo "tidak ada";
// }

// if(mysql_connect_error()){
// 	echo 'Berhasil melakukan koneksi ke Database.';
// }
// else{
// 	echo 'Gagal melakukan koneksi ke Database : '.mysql_connect_error();
// }
// mysql_connect_errno()
?>