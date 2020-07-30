<a href="?mod=entrygangguan">ENTRY Tingkat Gizi </a>

<table width="100%" border="1" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <td width="27">NO</td>
    <td><div align="center">ID Tingkat Gizi </div></td>
    <td><div align="center">Nama Tingkat Gizi </div></td>
    
    <td width="134"><div align="center">ACTION</div></td>
  </tr>
  
<?php
$no = 1 ;
$noo = 1 ;
$sql = mysql_query("SELECT * FROM tbltingkat_gizi order by id_tingkatgizi ASC");
while($hasil=mysql_fetch_array($sql))
{
$vid_tingkatgizi = $hasil['id_tingkatgizi'];
$vnama_tingkatgizi = $hasil['nama_tingkatgizi'];

?>
  <tr>   
    <td align="center" valign="top"><?php echo "$noo"; ?></td>
    <td valign="top"><?php echo "$vid_tingkatgizi"; ?></td>
    <td valign="top"><?php echo "$vnama_tingkatgizi"; ?></td>
    <td colspan="2" valign="top"><div align="center"><a href="?mod=editpenyakit&id_tingkatgizi=<?php echo "$vid_tingkatgizi"; ?>"> UPDATE </a>
    <a href="deletegangguan.php?id_tingkatgizi=<?php echo $vid_tingkatgizi;?> "> DELETE </a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
