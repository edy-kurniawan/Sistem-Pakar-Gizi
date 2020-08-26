<?php include "../config.php" ?>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 1px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: #008CBA; 
  color: black; 
  border: 2px solid #008CBA;
}

.button3:hover {
  background-color: white;
  color: black;
}
.button4 {
  background-color: #f44336; 
  color: black; 
  border: 2px solid #f44336;
}

.button4:hover {
  background-color: white;
  color: black;
}
</style>
<a class="button button2" href="?mod=entrygejala">ENTRY GEJALA</a>
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
    <td colspan="2"><div align="center"><a class="button button3" href="media.php?mod=editgejala&idgejala=<?php echo "$vidgejala"; ?>"><b> UPDATE </b></a>
      <a class="button button4" href="deletegejala.php?idgejala=<?php echo $vidgejala;?> "><b>DELETE </b></a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>