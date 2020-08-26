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
<a class="button button2" href="?mod=erule">ENTRI SOLUSI </a>
<table width="100%" border="1">
  <tr>
    <td>KODE RULE </td>
    <td ><div align="center">GEJALA </div></td>
    <td><div align="center">Tingkat Gizi</div></td>
    <td><div align="center">SOLUSI</div></td>
    <td><div align="center">Aksi</div></td>
  </tr>
  
  <?php
$no = 1 ; 
$noo = 1 ;

$sql = mysql_query("SELECT * FROM tbltingkat_gizi order by id_tingkatgizi ASC");
while($hasil=mysql_fetch_array($sql))
{
$id = $hasil['id_tingkatgizi'];
$nama = $hasil['nama_tingkatgizi'];

?>
  <tr>   
    <td valign="top"><?php echo "R$noo"; ?></td>
    <td valign="top"><?php 
	$sqlg = mysql_query("SELECT * FROM tblgejala_gizi where id_tingkatgizi='$id'");
	while($hasilg=mysql_fetch_array($sqlg))
	{
	$sqlg1 = mysql_query("SELECT * FROM tblgejala where idgejala='$hasilg[idgejala]'");
	$hasilg1=mysql_fetch_array($sqlg1);
	$idg = $hasilg['idgejala'];
	$namag = $hasilg1['namagejala'];

	echo "$idg. $namag <br>"; } ?></td>
	
    <td valign="top"><?php echo "$nama"; ?></td>
	
    <td valign="top"><?php 
	$sqlgt = mysql_query("SELECT * FROM tbltingkatgizi_solusi where idtingkatgizi='$id'");
	while($hasilgt=mysql_fetch_array($sqlgt))
	{
	$idgt = $hasilgt['idsolusi'];
	
	$sqlt = mysql_query("SELECT * FROM tblsolusi where idsolusi='$idgt'");
	while($hasilt=mysql_fetch_array($sqlt))
	{
	$idt = $hasilt['idsolusi'];
	$namat = $hasilt['keterangansolusi'];

	echo "$idt. $namat <br>"; } } ?></td>

    <td valign="top"><a class="button button3" href="?mod=tambahrulegejala">EDIT</a></td>
  </tr>
<?php $noo=$no+$noo;
} ?>
</table>
