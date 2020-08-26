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
<a class="button button2" href="?mod=entryterapi">ENTRI SOLUSI </a>
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
    <td colspan="2" valign="top"><div align="center"><a class="button button3" href="media.php?mod=updateterapi&idterapi=<?php echo "$vidterapi"; ?>"> UPDATE </a>
    <a class="button button4" href="deleteterapi.php?idterapi=<?php echo $vidterapi;?> "> DELETE </a></div></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
