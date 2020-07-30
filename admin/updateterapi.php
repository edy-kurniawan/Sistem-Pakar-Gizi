  <?php
 $a = $_GET[idterapi]; 
$sql = mysql_query("SELECT * FROM tblsolusi where idsolusi = '$a'");
while($hasil=mysql_fetch_array($sql))
{
$a = $hasil['idsolusi'];
$c = $hasil['keterangansolusi'];
}
?>
<form action= "updatecterapi.php" method="post">
<table width="80%" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <th colspan="2" align="center" scope="col">UPDATE TERAPI</th>
  </tr>
  <tr>
    <td width="20%">Id Terapi</td>
    <td width="179"><label>
    <input type="text" name="idterapi" value="<?php echo $a;?>">
    </label></td>
  </tr>
  <tr>
    <td>Keterangan Terapi </td>
    <td><label>
    <textarea name="keteranganterapi" cols="50"><?php echo $c;?></textarea>
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
