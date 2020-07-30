 <a href="cetaklaporan.php" target="_blank">Cetak</a>
<table width="100%" border="1" bordercolor="#000000">
      <tr bgcolor="#999999">
        <td valign="top"><strong>No.</strong></td>
        <td valign="top"><strong>Nama Lengkap</strong></td>
        <td><strong>Id pasien</strong></td>
        <td><strong>Umur</strong></td>
        <td><strong>Jenis Kelamin</strong></td>
        <td><div align="center"><strong>Aksi</strong></div></td>
      </tr>
	  	<?php 
//panggil data dari tabel
$query = "SELECT * FROM user where level != 'admin'"; 
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result))
{
//panggil data dari tabel, jadikan variabel
$no=$no+1;
?>
      <tr>
        <td valign="top"><?php echo "$no"; ?></td>
        <td valign="top"><?php echo "$data[nama_lengkap] " ; ?></td>
        <td><?php echo "$data[id_user]" ;?></td>
        <td valign="top"><?php echo "$data[umur] " ; ?></td>
        <td valign="top"><?php echo "$data[jk]" ; ?></td>
        <td valign="top"><div align="center"><?php echo "<a href=./aksi.php?module=hapususer&act=hapus&id=$data[id_user]>Hapus</a>";?></div></td>
      </tr>
          <?php
 }
?>
      
    </table>
     
