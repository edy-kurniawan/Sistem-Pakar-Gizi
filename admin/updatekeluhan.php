<?php
session_start();
include "../Library/koneksi.php";
include "../Library/library.php";

    mysql_query("UPDATE tblkeluhan SET idkeluhan='$_POST[id]',namakeluhan='$_POST[nm]' WHERE idkeluhan ='$_POST[id]'");
    header('location:media.php?module=pertanyaan');

?>