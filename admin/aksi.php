<?php
session_start();
include ('../library/koneksi.php');
include ('../library/library.php');

$module=$_GET[module];
$act=$_GET[act];

if ($module=='user' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}

if ($module=='berita' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}

if ($module=='profil' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}
if ($module=='help' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}
if ($module=='hubungi' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}

if ($module=='galeri' AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id='$_GET[id]'");
  header('location:media.php?module='.$module);
}

if ($module=='datakonsul' AND $act=='hapus'){
  mysql_query("DELETE FROM tblkonsultasi WHERE id='$_GET[id]'");
  header('location:media.php?module=data');
}

if ($module=='hapususer' AND $act=='hapus'){
  mysql_query("DELETE FROM user WHERE id_user='$_GET[id]'");
  header('location:media.php?mod=pasien');
}

elseif ($module=='user' AND $act=='input'){
  $pass=md5($_POST[password]);
  $level='admin';
  mysql_query("INSERT INTO user(id_user, password, nama_lengkap, email, level) 
	                       VALUES('$_POST[id_user]', '$pass', '$_POST[nama_lengkap]', '$_POST[email]', '$level')");
  header('location:media.php?module='.$module);
}

elseif ($module=='user' AND $act=='update'){

  if (empty($_POST[password])) {
    mysql_query("UPDATE user SET id_user      = '$_POST[id_user]',
                                 nama_lengkap = '$_POST[nama_lengkap]',
                                 email        = '$_POST[email]'  
                           WHERE id_user      = '$_POST[id]'");
  }

  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE user SET id_user      = '$_POST[id_user]',
                                 password     = '$pass',
                                 nama_lengkap = '$_POST[nama_lengkap]',
                                 email        = '$_POST[email]'  
                           WHERE id_user      = '$_POST[id]'");
  }
  header('location:media.php?module='.$module);
}

elseif ($module=='berita' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 // $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 

  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
      echo "Gagal menyimpan data !!! <br>
            Tipe file <b>$nama_file</b> : $tipe_file <br>
            Tipe file yang diperbolehkan adalah : <b>JPG/JPEG</b>.<br>";
      	echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";	 		  
    }
    else{
      move_uploaded_file($lokasi_file,"foto_berita/$nama_file_unik");
      mysql_query("INSERT INTO berita(judul,
                                      id_kategori,
                                      isi_berita,
                                      id_user,
                                      jam,
                                      tanggal,
                                      hari,
                                      gambar) 
                              VALUES('$_POST[judul]',
                                     '$_POST[kategori]',
                                     '$_POST[isi_berita]',
                                     '$_SESSION[namauser]',
                                     '$jam_sekarang',
                                     '$tgl_sekarang',
                                     '$hari_ini',
                                     '$nama_file_unik')");
     header('location:media.php?module='.$module);
   }
   }
   else{
     mysql_query("INSERT INTO berita(judul,
                                     id_kategori,
                                     isi_berita,
                                     id_user,
                                     jam,
                                     tanggal,
                                     hari) 
                             VALUES('$_POST[judul]',
                                    '$_POST[kategori]',
                                    '$_POST[isi_berita]',
                                    '$_SESSION[namauser]',
                                    '$jam_sekarang',
                                    '$tgl_sekarang',
                                    '$hari_ini')");
    header('location:media.php?module='.$module);
  }
}

elseif ($module=='berita' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  if (empty($lokasi_file)){
    mysql_query("UPDATE berita SET judul       = '$_POST[judul]',
                                   id_kategori = '$_POST[kategori]',
                                   isi_berita  = '$_POST[isi_berita]'  
                             WHERE id_berita   = '$_POST[id]'");
  }
  else{
    move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
    mysql_query("UPDATE berita SET judul       = '$_POST[judul]',
                                   id_kategori = '$_POST[kategori]',
                                   isi_berita  = '$_POST[isi_berita]',
                                   gambar      = '$nama_file'   
                             WHERE id_berita   = '$_POST[id]'");
  }
  header('location:media.php?module='.$module);
}

elseif ($module=='galeri' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 // $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 

  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
      echo "Gagal menyimpan data !!! <br>
            Tipe file <b>$nama_file</b> : $tipe_file <br>
            Tipe file yang diperbolehkan adalah : <b>JPG/JPEG</b>.<br>";
      	echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";	 		  
    }
    else{
      move_uploaded_file($lokasi_file,"foto_galeri/$nama_file_unik");
      mysql_query("INSERT INTO galeri(judul,
                                      foto) 
                              VALUES('$_POST[judul]', 
                                     '$nama_file_unik')");
     header('location:media.php?module='.$module);
   }
   }
   else{
     mysql_query("INSERT INTO galeri(judul ) 
                             VALUES('$_POST[judul]' )");
    header('location:media.php?module='.$module);
  }
}

elseif ($module=='galeri' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  if (empty($lokasi_file)){
    mysql_query("UPDATE galeri SET judul       = '$_POST[judul]'  
                             WHERE id_galeri   = '$_POST[id]'");
  }
  else{
    move_uploaded_file($lokasi_file,"foto_galeri/$nama_file");
    mysql_query("UPDATE galeri SET judul       = '$_POST[judul]', 
                                   foto      = '$nama_file'   
                             WHERE id_galeri   = '$_POST[id]'");
  }
  header('location:media.php?module='.$module);
}


//hubungan
elseif ($module=='hubungan' AND $act=='input')
{
  mysql_query("INSERT INTO hubungan(idkeluhan, idperawatan) 
	                       VALUES('$_POST[idk]','$_POST[idp]')");
  header('location:media.php?module='.$module);
}
elseif ($module=='hubungan' AND $act=='hapus'){
  mysql_query("DELETE FROM hubungan WHERE idkeluhan='$_GET[id]'");
  header('location:media.php?module='.$module);
}

//perawatan
elseif ($module=='perawatan' AND $act=='input')
{
  mysql_query("INSERT INTO tblperawatan(idperawatan, namaperawatan) 
	                       VALUES('$_POST[id]','$_POST[keterangan]')");
  header('location:media.php?module='.$module);
}

elseif ($module=='perawatan' AND $act=='update')
{
    mysql_query("UPDATE tblperawatan SET idperawatan = '$_POST[id]',
                           namaperawatan = '$_POST[nm]'
                           WHERE idperawatan = '$_POST[id]'");
 	header('location:media.php?module='.$module);
 }
elseif ($module=='perawatan' AND $act=='hapus'){
  mysql_query("DELETE FROM tblperawatan WHERE idperawatan='$_GET[id]'");
  header('location:media.php?module='.$module);
}
 
 elseif ($module=='pertanyaan' AND $act=='input')
{
  mysql_query("INSERT INTO tblkeluhan(idkeluhan, namakeluhan) VALUES('$_POST[id]', '$_POST[pertanyaan]')");
  header('location:media.php?module='.$module);
}

elseif ($module=='pertanyaan' AND $act=='update')
{
    mysql_query("UPDATE tblkeluhan SET idkeluhan='$_POST[id]',namakeluhan='$_POST[nm]' WHERE idkeluhan ='$_POST[id]'");
	header('location:media.php?module='.$module);
 }  

elseif ($module=='pertanyaan' AND $act=='hapus'){
  mysql_query("DELETE FROM tblkeluhan WHERE idkeluhan='$_GET[id]'");
  header('location:media.php?module='.$module);
}

 //data
  elseif ($module=='data' AND $act=='input')
{
  mysql_query("INSERT INTO data (id_data, pertanyaan, ifyes, ifno)
  			    VALUES('$_POST[id]', '$_POST[pertanyaan]', '$_POST[yes]', '$_POST[no]')");
  header('location:media.php?module='.$module);
}

elseif ($module=='data' AND $act=='update')
{
    mysql_query("UPDATE data SET id_data='$_POST[id]',pertanyaan='$_POST[pertanyaan]', ifyes='$_POST[yes]', ifno='$_POST[no]' 
				WHERE id_data ='$_POST[id]'");
	header('location:media.php?module='.$module);
 } 
 
 //help
   elseif ($module=='help' AND $act=='input')
{
  mysql_query("INSERT INTO help (id_help, judul, isi)
  			    VALUES('$_POST[id]', '$_POST[judul]', '$_POST[isi]')");
  header('location:media.php?module='.$module);
}

elseif ($module=='help' AND $act=='update')
{
    mysql_query("UPDATE help SET id_help='$_POST[id]',judul='$_POST[judul]', isi='$_POST[isi]' 
				WHERE id_help='$_POST[id]'");
	header('location:media.php?module='.$module);
 } 
 
 
 //profil
    elseif ($module=='profil' AND $act=='input')
{
  mysql_query("INSERT INTO profil (id_profil, judul, isi)
  			    VALUES('$_POST[id]', '$_POST[judul]', '$_POST[isi]')");
  header('location:media.php?module='.$module);
}
 elseif ($module=='profil' AND $act=='update')
{
    mysql_query("UPDATE profil SET id_profil='$_POST[id]',judul='$_POST[judul]', isi='$_POST[isi]' 
				WHERE id_profil='$_POST[id]'");
	header('location:media.php?module='.$module);
 } 
?>
