<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include"library/koneksi.php";
session_start();
if (empty($_SESSION[namauser]) AND empty($_SESSION[passuser]))
{
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else
{ 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Tingkat Gizi Lansia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</head>
<body>
			<!-- Header -->
				<div id="header">
				</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="homeuser.php?menu=konsul">Konsultasi</a></li>
								<li>
									<a href="#">Keluar</a>
									<ul>
										<li><a href="admin/logout.php">Ya</a></li>
										<li><a href="#">Tidak</a></li>
									</ul>
								</li>
							</ul>
						</nav>


    <div id="main">
         <div id="text" >
			  <?php include "kanan.php" ;?>
        </div>
		  
    </div>

    <div id="footer" align="center">
    <div id="left_footer">Copyright | Sistem Pakar Tingkat Gizi Lansia | 2020</div>
    </div>

</body>
</html>
<?php } ?>