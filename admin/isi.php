<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include "../library/koneksi.php";
include "../library/library.php";
include "../library/fungsi_indotgl.php";
include "../library/fungsi_combobox.php";
include "../library/class_paging.php";
if($_GET['module']=='home')
	 {
	 
    $edit=mysql_query("SELECT * FROM user WHERE id_user='$_SESSION[namauser]'");
    $r=mysql_fetch_array($edit);
	 
	  echo "<h2>Selamat Datang</h2>
          <p>Hai <b>$r[nama_lengkap]</b>, 
		  silahkan klik menu pilihan yang berada di sebelah atas untuk mengelola content website. </p>
          <p align=right>Login Hari ini: ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo "</p>";
 } 
 	if($_GET[module]=='hubungi')
  	{include"modul/mod_hubungi.php";}
	
   	if($_GET[module]=='user')
  	{include"modul/mod_user.php";}
	
	if($_GET[module]=='help')
  	{include"modul/mod_help.php";}
	
	if($_GET[module]=='perawatan')
  	{include"modul/mod_perawatan.php";}
	
  	if($_GET[module]=='pertanyaan')
  	{include"modul/mod_pertanyaan.php";}
	
  	if($_GET[module]=='pertanyaann')
  	{include"modul/mod_pertanyaann.php";}
	
	 if($_GET[module]=='berita')
  	{include"modul/mod_berita.php";}
	
	if($_GET[module]=='data')
  	{include"modul/mod_data.php";}
	
	if($_GET[module]=='profil')
  	{include"modul/mod_profil.php";}
	
	if($_GET[module]=='galeri')
  	{include"modul/mod_galeri.php";}
	
	if($_GET[module]=='hubungan')
  	{include"modul/mod_hubungan.php";}
	
	
if($_GET['mod']==rule){
echo "<h3>Data Rule</h3>";
include "laporanrule.php" ; 
}
if($_GET['mod']==erule){
echo "<h3>Entry Rule</h3>";
include "entryrule.php" ; 
include "laporanrule.php" ; 
}
 
if($_GET['mod']==hasilkonsul1){
echo "<h3>Konsultasi</h3>";
include "checkkonsul1.php" ; 
}

if($_GET['mod']==pasien){
echo "<h3>Data Pasien</h3>";
include "laporanregistrasi.php" ; 
}

if($_GET['mod']==gejala){
echo "<h3>Data Gejala</h3>";
include "laporangejala.php" ; 
}
if($_GET['mod']==editgejala){
echo "<h3>Edit Data Gejala</h3>";
include "updategejala.php" ; 
}

if($_GET['mod']==tambahrulegejala){
echo "<h3>Edit Rule</h3>";
include "laporanrulesatu.php" ; 
include "laporanrule.php" ; 
}

if($_GET['mod']==tambahrulegejala1){
echo "<h3>Tambah Gejala</h3>";
include "updategejalarule.php" ; 
include "laporanrulesatu.php" ; 
}

if($_GET['mod']==tambaht){
echo "<h3>Tambah Terapi</h3>";
include "updatet.php" ; 
include "laporanrulesatu.php" ; 
}

if($_GET['mod']==entrygangguan){
echo "<h3>Entry Data Penyakit</h3>";
include "entrygangguan.php" ; 
}
if($_GET['mod']==entryterapi){
echo "<h3>Entry Data Solusi</h3>";
include "entrysolusi.php" ; 
}
if($_GET['mod']==entrygejala){
echo "<h3>Entry Data Gejala</h3>";
include "entrygejala.php" ; 
}
if($_GET['mod']==penyakit){
echo "<h3>Data Tingkat Gizi</h3>";
include "laporangangguan.php" ; 
}
if($_GET['mod']==editpenyakit){
echo "<h3>Edit Data Penyakit</h3>";
include "updategangguan.php" ; 
}

if($_GET['mod']==solusi){
echo "<h3>Data Solusi</h3>";
include "laporanterapi.php" ; 
}
if($_GET['mod']==updateterapi){
echo "<h3>Edit Data Terapi</h3>";
include "updateterapi.php" ; 
}
?>