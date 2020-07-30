<?php
switch($_GET[act])
{
  // Tampil User
  default:
 ?>
 <h2>Daftar Keluhan</h2><hr>
<table width="404">
  <tr>
    <th width="24">NO</th>
    <th width="46">KODE</th>
    <th width="246">KELUHAN</th>
    <th width="68">AKSI</th>
  </tr>
  <?php 
  $pertanyaan=mysql_query("SELECT * FROM tblkeluhan");
  $no=0;
  while ($r=mysql_fetch_array($pertanyaan))
  { $no++;
  ?>
  <tr>
    <td><?php echo"$no";?></td>
    <td><?php echo"$r[idkeluhan]";?></td>
    <td><?php echo"$r[namakeluhan]";?></td>
    <td><?php echo"<a href=?module=pertanyaan&act=editpertanyaan&id=$r[idkeluhan]>Edit</a> | 
	               <a href=./aksi.php?module=pertanyaan&act=hapus&id=$r[idkeluhan]>Hapus</a>";?>
    </td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="3"><?php echo"<a href=?module=pertanyaan&act=tambah&id=$r[idkeluhan]>Insert New</a>";?></td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php 

break;

case"tambah";
	?>
	<form method="post" action="./aksi.php?module=pertanyaan&act=input">
<table>
  <tr><td>Kode</td><td><input name="id" type="text" id="id" /></td></tr>
  <tr><td>Pertanyaan</td></tr>
  <tr><td colspan="3"><textarea name='pertanyaan' cols=65 rows=13 id="pertanyaan" ></textarea>
  </td></tr>
  <tr>
    <td><input type=submit value=Kirim></td>
	<td><input type=button value=Batal onclick=self.history.back()></td>
  </tr>
</table>
</form>

	<?php
break;

	case"editpertanyaan":
	 $data=mysql_query("SELECT *FROM tblkeluhan WHERE idkeluhan='$_GET[id]'");
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