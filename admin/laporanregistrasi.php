<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #008CBA;
}

.button3:hover {
  background-color: white;
  color: black;
}
.button4 {
  background-color: #f44336; 
  color: black; 
  border: 2px solid #f44336;
}

.button4:hover {
  background-color: white;
  color: black;
}
</style>
<a class="button button2" href="cetaklaporan.php" target="_blank">Cetak</a>
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
        <td valign="top"><div align="center"><?php echo "<a class='button button3' href=./aksi.php?module=hapususer&act=hapus&id=$data[id_user]>Hapus</a>";?></div></td>
      </tr>
          <?php
 }
?>
      
    </table>
     
