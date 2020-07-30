<form action= "cetaklaporan.php" method="post">
<table width="80%" border="1" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <td width="25%">Cetak Laporan Pada : </td>
    <td width="179"><select name="bln" id="bln" required>
	<option value="">=Bln=</option>
	<?
echo "<option value=01>01</option> ";
echo "<option value=02>02</option> ";
echo "<option value=03>03</option> ";
echo "<option value=04>04</option> ";
echo "<option value=05>05</option> ";
echo "<option value=06>06</option> ";
echo "<option value=07>07</option> ";
echo "<option value=08>08</option> ";
echo "<option value=09>09</option> ";
echo "<option value=10>10</option> ";
echo "<option value=11>11</option> ";
echo "<option value=12>12</option> ";
?>
    </select>


	<select name="thn" id="thn" required>
	<option value="">=Thn=</option>
	<?
$i=2014; while($i<=2025) {
echo "<option value=$i>$i</option> ";
$i++;
}
?>
    </select></td>
  </tr><tr>
    <td valign="top">Tempat </td>
    <td>
      <input name="t4" type="text" id="t4"  size="50" />    </td>
  </tr>
  <tr>
    <td>Nama Penanggung Jawab </td>
    <td><input name="nama" type="text" id="nama" size="50" /></td>
  </tr>
  <tr>
    <td>NIP </td>
    <td>
      <input name="nip" type="text" id="nip" size="50">    </td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="Submit" value="Cetak" />        </td>
  </tr>
</table> 
</form>
