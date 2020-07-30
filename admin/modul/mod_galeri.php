<?php
switch($_GET[act]){
  // Tampil galeri
  default:
    echo "<h2>Galeri</h2>
          <input type=button value='Tambah Galeri' onclick=location.href='?module=galeri&act=tambahgaleri'>
          <table>
          <tr><th>no</th><th>judul</th><th>nama file gambar</th><th>aksi</th></tr>";

    $p      = new Paging;
    $batas  = 3;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM galeri ORDER BY id DESC limit $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM galeri 
                           WHERE id='$_SESSION[namauser]'       
                           ORDER BY id DESC");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[foto]</td>
		            <td><a href=?module=galeri&act=editgaleri&id=$r[id]>Edit</a> | 
		                <a href=./aksi.php?module=galeri&act=hapus&id=$r[id]>Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
  
    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM galeri"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM galeri WHERE id='$_SESSION[namauser]'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "<div id=paging>$linkHalaman</div><br>";
    break;
  
  case "tambahgaleri":
    echo "<h2>Tambah galeri</h2>
          <form method=POST action='./aksi.php?module=galeri&act=input' enctype='multipart/form-data'>
          <table>
          <tr><td>Judul</td>     <td> : <input type=text name='judul' size=50></td></tr>
          <tr><td>Gambar</td>    <td> : <input type=file name='fupload' size=40></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
    
  case "editgaleri":
    $edit = mysql_query("SELECT * FROM galeri WHERE id='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit galeri</h2>
          <form method=POST enctype='multipart/form-data' action=./aksi.php?module=galeri&act=update>
          <input type=hidden name=id value=$r[id_galeri]>
          <table>
          <tr><td>Judul</td>     <td> : <input type=text name='judul' size=40 value='$r[judul]'></td></tr>
          <tr><td>Gambar</td><td> : <img src='foto_galeri/$r[foto]' width=40%></td></tr>
         <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=30> *)</td></tr>
         <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
         <tr><td colspan=2><input type=submit value=Update>
                           <input type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form>";
    break;  
}
?>
