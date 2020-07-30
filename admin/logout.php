<?php
  session_start();
  session_destroy();
  echo "<center>Anda telah sukses keluar sistem <b>[LOGOUT]<b>";
  echo"<meta http-equiv=Refresh content=1;url=../index.php>";
?>
