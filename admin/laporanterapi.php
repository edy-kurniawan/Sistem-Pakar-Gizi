<a href="?mod=entryterapi">ENTRI SOLUSI </a>

<table width="100%" border="1">
  <tr>
    <td width="28">NO</td>
    <td ><div align="center">KODE SOLUSI  </div></td>
    <td><div align="center">SOLUSI</div></td>
    
    <td><div align="center">ACTION</div></td>
  </tr>
  
  <?php
$no = 1 ;
$noo = 1 ;
$sql = mysql_query("SELECT * FROM tblsolusi");
while($hasil=mysql_fetch_array($sql))
{
$vidterapi = $hasil['idsolusi'];
$vketeranganterapi= $hasil['keterangansolusi'];

?>
  <tr>   
    <td valign="top"><?php echo "$noo"; ?></td>
    <td valign="top"><?php echo "$vidterapi"; ?></td>
    <td valign="top"><?php echo "$vketeranganterapi"; ?></td>
    <td colspan="2" valign="top"><div align="center"><a href="media.php?mod=updateterapi&idterapi=<?php echo "$vidterapi"; ?>"> UPDATE </a>
    <a href="deleteterapi.php?idterapi=<?php echo $vidterapi;?> "> DELETE </a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
