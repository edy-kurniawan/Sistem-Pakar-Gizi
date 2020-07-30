<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']))
{
	echo "<link href='../Library/adminstyle.css' rel='stylesheet' type='text/css'><center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=login.php><b>LOGIN</b></a></center>";
}
else
{ 
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Sistem Pakar Tingkat Gizi Lansia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		span.title{
			display: none;
		}
		body {
			/*border: 2px solid black;*/
		}
		/*.container {
			border: 1px solid red;
			overflow: hidden;
		}
		#header {
			border: 1px solid blue;
		}
		#nav {
			border: 1px solid red;
		}
		#main{
			border: 1px solid green;
		}
		#footer {
			border: 1px solid orange;
		}*/
	</style>
</head>
<body>
	<div class="container">
		<!-- Header -->
		<div id="header">
		</div>
		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li class="current"></li>
				<li><a href="#">Data</a>
					<ul>
						<li><a href="?mod=gejala">Gejala</a></li>
						<li><a href="?mod=penyakit">Tingkat Gizi</a></li>
						<li><a href="?mod=solusi">Solusi</a></li>
						<li><a href="?mod=rule">Rule</a></li>
					</ul>
				</li>
				<li><a href="#">Laporan</a>
					<ul>
						<li><a href="?mod=pasien">Laporan Pasien</a></li>
						<li><a href="?module=data">Laporan Konsultasi</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Keluar</a>
					<ul>
						<li><a href="logout.php">Ya</a></li>
						<li><a href="#">Tidak</a></li>
					</ul>
				</li>
			</ul>
		</nav>

	    <div id="main">
	         <div id="text" >
				  <?php include "isi.php" ;?>
	        </div>
	    </div>
	    <div id="footer" align="center">
	    	<div id="left_footer">Copyright © 2020 Sistem Pakar - All rights reserved</div>
	    </div>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!-- <script src="assets/js/main.js"></script> -->
	<script type="text/javascript">
		$('#nav > ul').dropotron({
			offsetY: -15,
			hoverDelay: 0,
			alignment: 'center'
		});
	</script>
</body>
</html>
<?php } ?>