 <?php
include "library/koneksi.php";
session_start();
$tgl= date('d-m-Y');
$sql = mysql_query("SELECT * FROM user where id_user='$_SESSION[namauser]'");
$hasil=mysql_fetch_array($sql);

echo "<table width=78%><tr><td align='right'>$tgl</td></tr></table>";

echo "Id Pasien : $hasil[id_user] <br>
Nama Pasien : $hasil[nama_lengkap] <br>";
echo "Umur : $hasil[umur] Thn <br>";
echo "Tinggi Badan : $hasil[tinggi_badan]<br>";
echo "Berat Badan : $hasil[berat_badan]<br>";
echo "Centang gejala berikut ini, Kemudian klik Diagnosa. ";

// =======================================================================================================

?>
<style type="text/css">

table.judul{
	border-width:2px;
	border-top-style:groove;
	border-bottom-style:none;
	border-right-style:groove;
	border-left-style:groove;
	-moz-border-radius-topleft:8px;
	-webkit-border-top-left-radius:8px;
	-moz-border-radius-topright:8px;
	-webkit-border-top-right-radius:8px;
	width:700px;
	height:40px;
	background-color: #A4C8FF;
}
table.data{
border-top-style:groove;
border-bottom-style:none;
border-right-style:groove;
border-left-style:groove;
border-color:lightblue;
border-width:2px;
width:679px;
}
table.jumlah{
border-style:groove;
border-color:lightblue;
border-width:2px;
width:700px;
height:40px;
background-image:url('head9.jpg');
-moz-border-radius-bottomleft:15px;
-webkit-border-bottom-left-radius:15px;
-moz-border-radius-bottomright:15px;
-webkit-border-bottom-right-radius:15px;

}
tr.data:hover{
background-color:#FBDD94}
div.data{
width:696px;
height:400px;
overflow:auto;
border-top-style:none;
border-bottom-style:groove;
border-right-style:groove;
border-left-style:groove;
border-color:lightblue;
border-width:2px;
}
</style>
<center>
<h3>GOAL	:  TINGKAT GIZI</h3>
<table   class="judul">
    <th colspan="4" align="left"><strong>GEJALA</strong></th>
</table>
<div class="data">
<form method="post" action="?menu=hasilkonsul&id=<?php echo"$_SESSION[namauser]" ?>">
<table   class="data">
<tr bgcolor="#A4C8FF"> 
	<td> <strong>Kode</strong></td>
	<td colspan="2"><strong>Centang Gejala yang anda rasakan.</strong>
	</td>
</tr>
  <?php 
$hasil = mysql_query("SELECT * FROM tblgejala");
	 $warna1="#ccc"; //baris genap berwarna putih
	 $warna2="#fff"; //baris genap berwarna cyan muda
	 $warna=$warna1; //warna default
	$jum=mysql_num_rows($hasil);
	 $no=1;
	 while ($data=mysql_fetch_array($hasil))
	 {
	 $id_kategori=$data['idgejala'];
		 if ($warna==$warna1) {
		 $warna=$warna2;}
		 else {
		 $warna=$warna1;} ?>

<?php	 echo " <tr bgcolor='$warna' class='data'> 
			<td valign='top' width='8%'>$data[idgejala]</td>";
	 echo " </td>
			<td class='data'  valign='top'>$data[namagejala]</td>		
			<td align='center'  valign='top' width='5%'>" ?>
			<input name="idgejala[]" type="checkbox" id="<?php echo "$data[idgejala]";?>" value="<?php echo "$data[idgejala]";?>" />
<?php	echo "    <input type='hidden' id='jum' name='jum' value='$jum'>
	</td> </tr>";
	 $no++;
	 } 
			?>			
		<tr > <td colspan="3"> <br /><br /><center><input name="Submit" type="submit" value="Diagnosa" /></td></tr>
		</center>
</table></form> </center>
</div>

