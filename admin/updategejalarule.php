<? include "../config.php" ?>
<form action= "updatecgejalarule.php" method="post">
<table width="80%" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Id Gejala / Nama Gejala</td>
    <td>
<select name="gejala" id="gejala">
	  <?php
$a = $_GET[id]; 
$sql = mysql_query("SELECT * FROM tblgejala ");
while($hasil=mysql_fetch_array($sql))
{
$aa = $hasil['idgejala'];
$vidgangguan = $hasil['idgangguan'];
$bb = $hasil['namagejala'];

?>
  <option value="<? echo "$aa"; ?>"><? echo "$aa.$bb"; ?></option> <? } ?>
</select>
    <input type="hidden" name="id" value="<? echo $a;?>">
	</td>
  </tr>

  <tr>
    <td colspan="2"><label>
      <input type="submit" name="Submit" value="Simpan" />
      </label></td>
  </tr>
</table> 
</form>
