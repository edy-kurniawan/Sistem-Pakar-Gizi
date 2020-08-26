<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	include"library/koneksi.php";
	include "Library/fungsi_indotgl.php";
	include "Library/library.php";
	include "Library/class_paging.php";
	if($_GET[menu]=='home') 
	{echo"<h1 align=center>SISTEM PAKAR UNTUK MENENTUKAN TINGKAT GIZI LANSIA";?>
	<br /><br />
	<?php echo "<img src=images/slideshow-ginjal.gif /></h1>"; ?>
	
	<br />
	
<?php  include"admin/index.php"; 

}
	
	if($_GET[menu]=='petunjuk') 
	{echo"<h1 align=center>Petunjuk Penggunaan Sistem</h1>";?>
	<table>
	<tr><td colspan="2"></td></tr>
	
	<?php 
	$profil=mysql_query("SELECT * FROM profil where id_profil='2'");
	while($r=mysql_fetch_array($profil))
	{
	?>
	  <tr><th><h2><?php echo"$r[judul]";?></h2></th><tr>
	  <tr><td><?php echo"$r[isi]";?></td></tr>
	 <?php }?>
</table>
	<?php }
	
	
	if($_GET[menu]=='konsul')
	{echo "<h2 align=center>Form Konsultasi</h2><hr>";
	include"table_konsul.php";}
	
	if($_GET[menu]=='hasilkonsul')
	{include"checkkonsul.php";}
	
	if($_GET[menu]=='oke')
	{include"cekoke.php";}
	
	if($_GET[menu]=='no')
	{include"cekno.php";}
	
	if($_GET['mod']==hasilkonsul1){
	echo "<h2 align=center>Hasil Konsultasi</h2>";
	include "checkkonsul1.php" ; 
	}
	
	if($_GET[menu]=='loginadmin')
	{
	echo "<h2>Login Admin</h2>";
	include"admin/loginadmin.php";}
	
	
	if($_GET[menu]=='registrasi')
	{
		?>
		
		<form method="get" action="">
		<table width="80%" border="1" align="center" bgcolor="#A4C8FF">
		  <tr><td colspan="2"><h1 align="center">Form Registrasi</h1></td></tr>
		  <tr><td>Nama Lengkap</td>	<td><input name="nama_lengkap" 	type="text" id="nama_lengkap" required/></td></tr>
		  <tr><td>Username </td>		<td><input name="id_user" 		type="text" id="id_user" required /></td></tr>
		  <tr><td>Password</td>		<td><input name="password" 		type="password" id="password" required/></td></tr>
		  <tr><td>Umur</td>		    <td><input name="umur" 		type="text" id="umur" required/></td></tr>
		  <tr><td>Jenis Kelamin</td><td><select name="jk" id="jk" required>
		    <option value="">Jenis Kelamin</option>
		    <option value="Laki-laki">Laki-laki</option>
		    <option value="Perempuan">Perempuan</option>
		  </select></td></tr>
		  <tr><td>Tinggi Badan</td>		    <td><input name="tinggi_badan" 		type="text" id="tinggi_badan" required/></td></tr>
		  <tr><td>Berat Badan</td>		    <td><input name="berat_badan" 		type="text" id="berat_badan" required/></td></tr>
		  <tr><td align="right"><a href=home.php?menu=home><b>Kembali</b></a></td>		<td><input type="submit" 		name="daftar" value="Daftar" /></td></tr>
		</table>
		</form>
	<?php 
	} 
	
	if($_GET[daftar]=='Daftar')
	{
		// echo "daftar";
		$pass=md5($_GET[password]);
		$level='user';
		// var_dump($_GET);
		// $query =  mysql_query("INSERT INTO user(id_user, password, nama_lengkap, umur ,jk ,level ,tinggi_badan,berat_badan,jenis_kondisi) VALUES('$_GET[id_user]', '$pass', '$_GET[nama_lengkap]', '$_GET[umur]', '$_GET[jk]',  '$level', '$_GET[tinggi_badan]', '$_GET[berat_badan]', '$_GET[jenis_kondisi]'))))");
		$query =  "INSERT INTO user(id_user, password, nama_lengkap, umur ,jk ,level ,tinggi_badan,berat_badan,jenis_kondisi) 
					VALUES('$_GET[id_user]', '$pass', '$_GET[nama_lengkap]', '$_GET[umur]', '$_GET[jk]',  '$level', '$_GET[tinggi_badan]', '$_GET[berat_badan]', '$_GET[jenis_kondisi]')";
		// if (mysql_query($koneksi, $query)) {
		// 	echo "SELAMAT...,ANDA SUDAH TERDAFTAR DALAM SISTEM KAMI. SILAHKAN LOGIN DENGAN USERNAME DAN PASSWORD ANDA. <br> KLIK <strong><a href='home.php?menu=home'>DISINI</a></strong> UNTUK BERKONSULTASI.";
		// }
		mysql_query($query)or die(mysql_error());
		echo "SELAMAT...,ANDA SUDAH TERDAFTAR DALAM SISTEM KAMI. SILAHKAN LOGIN DENGAN USERNAME DAN PASSWORD ANDA. <br> KLIK <strong><a href='home.php?menu=home'>DISINI</a></strong> UNTUK BERKONSULTASI.";
	}
?>
