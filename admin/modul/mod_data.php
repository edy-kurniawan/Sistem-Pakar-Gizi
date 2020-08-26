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
 <h2>Daftar Konsultasi</h2><hr>
 <a class="button button2" href="modul/cetak.php" target="_blank">Cetak Konsultasi</a>
<table width="580" border="1">
  <tr>
    <th width="24">No</th>
    <th width="50">Tgl</th>
    <th>Nama Lengkap</th>
    <th>Umur</th>
    <th>JK</th>
    <!-- <th>Gejala</th> -->
    <th>Tingkat Gizi</th>
    <th>Aksi</th>
  </tr>
  <?php 
  $pertanyaan=mysql_query("SELECT * FROM tblkonsultasi");
  $no=0;
  while ($r=mysql_fetch_array($pertanyaan))
  { $no++;
  
  $pas=mysql_query("SELECT * FROM user where id_user='$r[id_pasien]'");
  $rp=mysql_fetch_array($pas);

  // $pas1=mysql_query("SELECT * FROM detailkonsul where idkonsul='$r[id_pasien]'");
  // while ($rp1=mysql_fetch_array($pas1)) {
  //   $gejala = array("$rp1[idgejala]");
  // }


  ?>
  <tr valign="top">
    <td><?php echo"$no";?></td>
    <td><?php echo"$r[tgl]";?></td>
    <td><?php echo"$rp[nama_lengkap]";?></td>
    <td><?php echo"$rp[umur]";?></td>
    <td><?php echo"$rp[jk]";?></td>
    <!-- <td><?php print_r($gejala);?></td> -->
    <td><?php echo"$r[idtingkatgizi] ($r[persen] %)";?></td>
    <td><?php echo "<a class='button button4' href=./aksi.php?module=datakonsul&act=hapus&id=$r[id]>Hapus</a>";?></td>
  <?php }?>
</table>

