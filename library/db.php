<?php

$server = "localhost";
$user = "itcloudn_epasar";
$password = "it-epasar";
$nama_database = "itcloudn_spg";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>