<?php include "../config.php" ?>
  <?php
 $a = $_GET[id_tingkatgizi]; 
$sql = mysql_query("SELECT * FROM tbltingkat_gizi where id_tingkatgizi = '$a'");
while($hasil=mysql_fetch_array($sql))
{
$a = $hasil['id_tingkatgizi'];
$vidgangguan = $hasil['id_tingkatgizi'];
$vnamagangguan = $hasil['nama_tingkatgizi'];
}
?>
<form action= "updatec.php?id=<?php echo $_GET['id_tingkatgizi'] ?>" method="post">
<table width="100%" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="20%">Id Penyakit</td>
    <td width="179"><label>
    <input type="text" name="id_tingkatgizi"
value="<?php echo $a;?>">
    </label></td>
  </tr>
  <tr>
    <td bordercolor="#000000">Nama Penyakit </td>
    <td bordercolor="#000000"><label>
    <input name="nama_tingkatgizi" type="text"
value="<?php echo $vnamagangguan;?>" size="100">
</label></td>
  </tr>
  <tr>
    <td bordercolor="#000000">&nbsp;</td>
    <td bordercolor="#000000"><label>
      <input type="submit" name="Submit" value="Simpan" />
    </label></td>
  </tr>
</table> 
<? include "laporangangguan.php";?>
</form>
