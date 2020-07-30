<?php include "../config.php" ?>
<a href="?mod=entrygejala">ENTRY GEJALA</a>
<table width="100%" border="1">
  <tr>
    <td width="27">NO</td>
    <td width="90"><div align="center">ID GEJALA</div></td>
    <td width="286"><div align="center">NAMA GEJALA </div></td>
    
    <td width="120"><div align="center">ACTION</div></td>
  </tr>
  
  <?php
$no = 1 ;
$noo = 1 ;
$sql = mysql_query("SELECT * FROM tblgejala order by idgejala ASC");
while($hasil=mysql_fetch_array($sql))
{
$vidgejala = $hasil['idgejala'];
$vidgangguan= $hasil['idgangguan'];
$vnamagejala = $hasil['namagejala'];


?>
  <tr>   
    <td align="center" valign="top"><?php echo "$noo"; ?></td>
    <td valign="top"><?php echo "$vidgejala"; ?></td>
    <td valign="top"><?php echo "$vnamagejala"; ?></td>
    <td colspan="2"><div align="center"><a href="media.php?mod=editgejala&idgejala=<?php echo "$vidgejala"; ?>">UPDATE </a>
      <a href="deletegejala.php?idgejala=<?php echo $vidgejala;?> "> DELETE </a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>