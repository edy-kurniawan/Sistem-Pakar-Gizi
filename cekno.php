<?php
include "library/koneksi.php";
session_start();
$sql = mysql_query("SELECT * FROM user where id_user='$_SESSION[namauser]'");
$hasil=mysql_fetch_array($sql);
echo "<h2 align=center>Konsultasi</h2>";
echo "Id Pasien : $hasil[id_user] <br>
Nama Pasien : $hasil[nama_lengkap] <br>";
echo "Umur : $hasil[umur] Thn <br>";
// ================================================================================================

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
	background-color: #CCCCCC;
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
background-color:#99FF66}
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

<table   class="judul">
    <th colspan="4" align="left"><strong>GEJALA</strong></th>
</table>
<div class="data">
<table   class="data">
<?php
$date=date("d/m/Y");
$querysave = "INSERT INTO tblkonsultasi       
          (tgl,id_pasien,id_tingkatgizi) 
VALUES ('$date','$_SESSION[namauser]','0')";
$resultsave = mysql_query($querysave)
or die(mysql_error());

$query51 = mysql_query("SELECT * FROM tblkonsultasi order by id desc "); 
$data51 = mysql_fetch_array($query51);
mysql_query(" update detailkonsul SET  
idkonsul='$data51[id]' where idkonsul=''");

 				$aa = "SELECT * FROM detailkonsul where idkonsul='$data51[id]' "; 
				$rr = mysql_query($aa) or die('Error');
				$no=1;
				while($data = mysql_fetch_array($rr)){
						$aa1 = "SELECT * From tblgejala where idgejala='$data[idgejala]' "; 
						$rr1 = mysql_query($aa1) or die('Error');
						$data1 = mysql_fetch_array($rr1);
	 
	 $id_kategori=$data['idgejala'];
		 if ($warna==$warna1) {
		 $warna=$warna2;}
		 else {
		 $warna=$warna1;} ?>

<?php	 echo " <tr bgcolor='$warna' class='data'> 
			<td width='10' align='center'>$no</td>
			<td class='data'>$data1[namagejala] </td> </tr>";
	$no++;
}

			?>
</table> 
</div>

<? 

echo "Gangguan yang anda derita tidak dapat dideteksi, silahkan hubungi dokter.";

?>
