<?php include "../config.php" ?>
  <?php
 $a = $_GET[idgejala]; 
$sql = mysql_query("SELECT * FROM tblgejala where idgejala = '$a'");
while($hasil=mysql_fetch_array($sql))
{
$a = $hasil['idgejala'];
$vidgangguan = $hasil['idgangguan'];
$vnamagejala = $hasil['namagejala'];
}
?>
<form action= "updatecgejala.php" method="post">
<table width="80%" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <th colspan="2" scope="col">UPDATE GEJALA</th>
  </tr>
  <tr>
    <td width="20%">Id Gejala</td>
    <td width="179"><label>
    <input type="text" name="idgejala"
value="<?php echo $a;?>">
    </label></td>
  </tr>
  <tr>
    <td bordercolor="#000000">Nama Gejala </td>
    <td bordercolor="#000000"><label>
    <input name="namagejala" type="text"
value="<?php echo $vnamagejala;?>" size="100">
</label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
        <div align="right">
          <input type="submit" name="Submit" value="Update" />
        </div>
      </label></td>
  </tr>
</table> 
</form>
