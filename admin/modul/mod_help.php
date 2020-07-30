<?php
switch($_GET[act]){
  // Tampil Berita
  default:
    echo "<h2>Petunjuk</h2>
          <input type=button value='Tambah' onclick=location.href='?module=help&act=tambahhelp'>
          <table>
          <tr><th>no</th><th>Menu</th><th>isi</th><th>aksi</th></tr>";
      $tampil = mysql_query("SELECT * FROM help");
	  $no=0;
    while($r=mysql_fetch_array($tampil))
	{$n0++;
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[isi]</td>
		            <td><a href=?module=help&act=edithelp&id=$r[id_help]>Edit</a> | 
		                <a href=./aksi.php?module=help&act=hapus&id=$r[id_help]>Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
    break;
  
  case "tambahhelp":
    echo "<h2>Tambah</h2>
          <form method=POST action='./aksi.php?module=help&act=input'>
          <table>
		  <input type=hidden name='id'>
          <tr><td>Judul</td>     <td> : <input type=text name='judul' size=50></td></tr>
    	   <tr><td>Isi 		</td><td> : <textarea name='isi' cols=55 rows=10></textarea></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan><input type=button value=Batal onclick=self.history.back()></td></tr>
          </table>
		  </form>";
     break;
    
  case "edithelp":
    $edit = mysql_query("SELECT * FROM help WHERE id_help='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit</h2>
          <form method=POST action=./aksi.php?module=help&act=update>
          <input type=hidden name=id value=$r[id_help]>
          <table>
          <tr><td>Judul</td>     <td> : <input type=text name='judul' size=40 value='$r[judul]'></td></tr>
          <tr><td>Isi Berita</td><td> : <textarea name='isi' cols=55 rows=10>$r[isi]</textarea></td></tr>
         <tr><td colspan=2><input type=submit value=Update>
                           <input type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form>";
    break;  
}
?>
