<?php
switch($_GET[act])
{
  // Tampil User
  default:
 ?>
 <h2>Daftar Hubungan Keluhan & Perawatan</h2><hr>
<table width="404">
  <tr>
    <th width="24">NO</th>
    <th width="200">KODE KELUHAN</th>
    <th width="200">KODE PERAWATAN</th>
    <th width="68">AKSI</th>
  </tr>
  <?php 
  $pertanyaan=mysql_query("SELECT * FROM hubungan");
  $no=0;
  while ($r=mysql_fetch_array($pertanyaan))
  { $no++;
  ?>
  <tr>
    <td><?php echo"$no";?></td>
    <td><?php echo"$r[idkeluhan]";?></td>
    <td><?php echo"$r[idperawatan]";?></td>
    <td><?php echo" <a href=./aksi.php?module=hubungan&act=hapus&id=$r[idkeluhan]>Hapus</a>";?>
    </td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="3"><?php echo"<a href=?module=hubungan&act=tambah>Insert New</a>";?></td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php 

break;

case"tambah";
	?>
	<form method="post" action="./aksi.php?module=hubungan&act=input">
	<h2>Entry Hubungan</h2><hr />
<table>
  <tr><td>Kode Keluhan</td><td>
  <select name="idk" id="idk">
	  <?php
$a = $_GET[id]; 
$sql = mysql_query("SELECT * FROM tblkeluhan ");
while($hasil=mysql_fetch_array($sql))
{
$aa = $hasil['idkeluhan'];
$bb = $hasil['namakeluhan'];

?>
  <option value="<? echo "$aa"; ?>"><? echo "$aa.$bb"; ?></option> <? } ?>
</select>

  <tr><td>Kode Perawatan</td><td>
    <select name="idp" id="idp">
	  <?php
$a = $_GET[id]; 
$sql = mysql_query("SELECT * FROM tblperawatan ");
while($hasil=mysql_fetch_array($sql))
{
$aa = $hasil['idperawatan'];
  $isi_berita = strip_tags($hasil['namaperawatan']); 
  $isi = substr($isi_berita,0,80); 
  $isi = substr($isi_berita,0,strrpos($isi," ")); 
?>
  <option value="<? echo "$aa"; ?>"><? echo "$aa.$isi.."; ?></option> <? } ?>
</select>

  </td></tr>
  <tr>
    <td><input type=submit value=Kirim></td>
	<td><input type=button value=Batal onclick=self.history.back()></td>
  </tr>
</table>
</form>

	<?php
break;

	case"edithubungan":
	 $data=mysql_query("SELECT *FROM hubungan WHERE idkeluhan='$_GET[id]'");
	 $r=mysql_fetch_array($data);
	?>
	<form method="POST" action="./updatekeluhan.php">
	<table>
	  
	  <tr><td>Id Keluhan</td><td><?php echo"$r[idkeluhan]";?>
	  <input type="hidden" name="id" value="<?php echo"$r[idkeluhan]";?>" ></td></tr>
	  <tr><td colspan="2">
	  		<textarea name='nm' cols=65 rows=13  ><?php echo"$r[namakeluhan]";?></textarea>
	  </td></tr>
	  <tr>
		<td><input type=submit value=Kirim>
	    <input name="button" type=button onclick=self.history.back() value=Batal /></td>
		<td>&nbsp;</td>
	  </tr>
	</table>
	</form>
	
	<?php
	break;
}?>