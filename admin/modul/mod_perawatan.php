<?php
switch($_GET[act])
{
  // Tampil User
  default:
 ?>
  <h2>Daftar Data Perawatan</h2><hr><table>
  <tr><th width="17">no</th> 
  <th width="33">kode</th>
  <th width="400">nama perawatan </th>
  <th width="66">aksi</th>
  </tr>
  <?php
  $data=mysql_query("SELECT * FROM tblperawatan ORDER BY idperawatan");
  $no=0;
  while($r=mysql_fetch_array($data))
  {
  	$no++;
  ?>
  <tr>
    <td><?php echo"$no";?></td>
    <td><?php echo"$r[idperawatan]";?></td>
    <td><?php echo"$r[namaperawatan]";?></td>
    <td><?php echo"<a href=?module=perawatan&act=editperawatan&id=$r[idperawatan]>Edit</a> | 
	               <a href=./aksi.php?module=perawatan&act=hapus&id=$r[idperawatan]>Hapus</a>";?>
    </td>
  </tr>
  <?php }?>
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo"<a href=?module=perawatan&act=tambah&id=$r[idperawatan]>Insert New</a>";?></td>
    <td>&nbsp;</td>
  </tr>
	</table>
	<?php 
	break;
	
	case"tambah";
	?>
	<form method="post" action="./aksi.php?module=perawatan&act=input">
<table>
  <tr><td>Kode</td><td><input name="id" type="text" ></td></tr>
  <tr><td>keterangan</td></tr>
  <tr><td colspan="3"><textarea name='keterangan' rows=13 cols=65 ></textarea>
  </td></tr>
  <tr>
    <td><input type=submit value=Kirim></td>
	<td><input type=button value=Batal onclick=self.history.back()></td>
  </tr>
</table>
</form>

	<?php
	break;
	
	case"editperawatan":
	 $data=mysql_query("SELECT *FROM tblperawatan WHERE idperawatan='$_GET[id]'");
	 $r=mysql_fetch_array($data);
	?>
	<form method="post" action="./aksi.php?module=perawatan&act=update">
	<table>
	  <tr><td width="76">Id Perawatan</td>
	  <td width="400"><?php echo"$r[idperawatan]";?><input type="hidden" name="id" value="<?php echo"$r[idperawatan]";?>" ></td></tr>
	  <tr><td colspan="2">Keterangan
	  		<textarea name='nm' cols=65 rows=13 id="nm" ><?php echo"$r[namaperawatan]";?></textarea>
	  </td></tr>
	  
	  <tr>
		<td colspan="2"><input type=submit value=Kirim>
	    <input name="button" type=button onclick=self.history.back() value=Batal /></td>
	  </tr>
	</table>
	</form>
	
	<?php
	break;
}
?>