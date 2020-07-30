<form action= "deleterule.php" method="post">
<table width="80%" border="1" align="center" bgcolor="#FFFFFF">

  <tr>
    <td width="20%">Id Solusi </td>
    <td width="179"><label>
      <select name="a" id="a">
        <?php include "config.php";
	$query = "SELECT * FROM tblsolusi order by idsolusi ASC"; 
	$result = mysql_query($query) or die('Error');
	while($data = mysql_fetch_array($result))
	{ ?>
        <option value="<?php echo "$data[idsolusi]"; ?>"><?php echo"$data[idsolusi]"; ?></option>
        <?php } ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Id Tingkat Gizi </td>
    <td><label>
    <select name="b" id="b">
      <?php include "config.php";
	$query = "SELECT * FROM tbltingkat_gizi order by id_tingkatgizi ASC"; 
	$result = mysql_query($query) or die('Error');
	while($data = mysql_fetch_array($result))
	{ ?>
      <option value="<?php echo "$data[id_tingkatgizi]"; ?>"><?php echo"$data[nama_tingkatgizi]"; ?></option>
      <?php } ?>
    </select>

</label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
        <div align="right">
          <input type="submit" name="Submit" value="Hapus" />
        </div>
      </label></td>
  </tr>
</table> 
</form>
