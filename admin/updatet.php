<? include "../config.php" ?>
<form action= "updatecgejalarulet.php" method="post">
<table width="100%" border="1" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Id Terapi / Ket Terapi</td>
    <td>
<select name="t" id="t">
	  <?php
$a = $_GET[id]; 
$sql = mysql_query("SELECT * FROM tblterapi ");
while($hasil=mysql_fetch_array($sql))
{
$aa = $hasil['idterapi'];
$bb = $hasil['keteranganterapi'];

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
