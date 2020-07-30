 <?php
include "../config.php";
echo "Id Pasien : $_GET[id] <br>";
$sql = mysql_query("SELECT * FROM tbluser where id=$_GET[id]");
$hasil=mysql_fetch_array($sql);
echo "Nama : $hasil[username] <br>";
echo "Jenis Kelamin : $hasil[jeniskelamin] <br>";
echo "Umur : $hasil[umur] Thn <br>";
echo "Alamat : $hasil[alamat] <br>";
// =========================================================================================================== PENYAKIT ===============================
?>
<style type="text/css">
th.judul{
width:140px;
}
td.data{
width:140px;
}
table.judul{
background-image:url('head9.jpg');
border-width:2px;
border-top-style:groove;
border-bottom-style:none;
border-right-style:groove;
border-left-style:groove;
-moz-border-radius-topleft:8px;
-webkit-border-top-left-radius:8px;
-moz-border-radius-topright:8px;
-webkit-border-top-right-radius:8px;
width:800px;
height:40px;
}
table.data{
border-top-style:groove;
border-bottom-style:none;
border-right-style:groove;
border-left-style:groove;
border-color:lightblue;
border-width:2px;
width:779px;
}
table.jumlah{
border-style:groove;
border-color:lightblue;
border-width:2px;
width:800px;
height:40px;
background-image:url('head9.jpg');
-moz-border-radius-bottomleft:15px;
-webkit-border-bottom-left-radius:15px;
-moz-border-radius-bottomright:15px;
-webkit-border-bottom-right-radius:15px;

}
tr.data:hover{
background-color:#00CCFF}
div.data{
width:796px;
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
    <th colspan="3"><div align="left">Gejala Anda :</div></th>
</table>
<div class="data">
<table   class="data">
  <? 
$G01=$_POST['G01']; $G02=$_POST['G02']; $G03=$_POST['G03']; $G04=$_POST['G04']; $G05=$_POST['G05'];
$G06=$_POST['G06']; $G07=$_POST['G07']; $G08=$_POST['G08']; $G09=$_POST['G09']; $G10=$_POST['G10'];
$G11=$_POST['G11']; $G12=$_POST['G12']; $G13=$_POST['G13']; $G14=$_POST['G14']; $G15=$_POST['G15'];
$G16=$_POST['G16']; $G17=$_POST['G17']; $G18=$_POST['G18']; $G19=$_POST['G19']; $G20=$_POST['G20'];
$G21=$_POST['G21']; $G22=$_POST['G22']; $G23=$_POST['G23']; $G24=$_POST['G24']; $G25=$_POST['G25'];
$G26=$_POST['G26']; $G27=$_POST['G27']; $G28=$_POST['G28']; $G29=$_POST['G29']; $G30=$_POST['G30'];
$G31=$_POST['G31']; $G32=$_POST['G32']; $G33=$_POST['G33']; $G34=$_POST['G34']; $G35=$_POST['G35'];
$G36=$_POST['G36']; $G37=$_POST['G37']; $G38=$_POST['G38']; $G39=$_POST['G39']; $G40=$_POST['G40'];
$G41=$_POST['G41']; $G42=$_POST['G42']; $G43=$_POST['G43']; $G44=$_POST['G44']; $G45=$_POST['G45'];

	 $hasil=mysql_query("Select * From tblgejala where 
	 	idgejala='$G01' OR idgejala='$G02' OR idgejala='$G03' OR idgejala='$G04' OR idgejala='$G05'
		OR idgejala='$G06' OR idgejala='$G07' OR idgejala='$G08' OR idgejala='$G09' OR idgejala='$G10' 
		
		OR idgejala='$G11' OR idgejala='$G12' OR idgejala='$G13' OR idgejala='$G14' OR idgejala='$G15' 
		OR idgejala='$G16' OR idgejala='$G17' OR idgejala='$G18' OR idgejala='$G19' OR idgejala='$G210' 
		
		OR idgejala='$G21' OR idgejala='$G22' OR idgejala='$G23' OR idgejala='$G24' OR idgejala='$G25' 
		OR idgejala='$G26' OR idgejala='$G27' OR idgejala='$G28' OR idgejala='$G29' OR idgejala='$G30' 
		
		OR idgejala='$G31' OR idgejala='$G32' OR idgejala='$G33' OR idgejala='$G34' OR idgejala='$G25' 
		OR idgejala='$G36' OR idgejala='$G37' OR idgejala='$G38' OR idgejala='$G39' OR idgejala='$G40' 
		
		OR idgejala='$G41' OR idgejala='$G42' OR idgejala='$G43' OR idgejala='$G44' OR idgejala='$G45' 
		
		"); 
	 $warna1="#FFFFFF"; //baris genap berwarna putih
	 $warna2="#CCFFFF"; //baris genap berwarna cyan muda
	 $warna=$warna1; //warna default
	 
	 $no=1;
	 while ($data=mysql_fetch_array($hasil))
	 {
	 
$query = "INSERT INTO detailkonsul       
          (idkonsul,idgejala) 
VALUES ('$a','$data[idgejala]')";
$result = mysql_query($query)
or die(mysql_error());

	 
	 $id_kategori=$data['idgejala'];
		 if ($warna==$warna1) {
		 $warna=$warna2;}
		 else {
		 $warna=$warna1;} ?>

<?	 echo " <tr bgcolor='$warna' class='data'> 
			<td width='10' align='center'>$no</td>
			<td class='data'>$data[namagejala] </td> "; ?>
<?	echo "	 </tr>";
	 
$cekk=$data['idgangguan'];
	 
	 $no++;
	 } 
			?>
</table> 
</div>

<? 
$query3 = "SELECT * FROM tblgangguan where idgangguan = '$cekk' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$namagangguan= $data3['namagangguan'] ;
$ket= $data3['keterangangangguan'] ;
}

$query = "SELECT * FROM tblgangguanterapi where idgangguan = '$cekk'"; 
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result))
{
//panggil data dari tabel, jadikan variabel
$vidterapi= $data['idterapi'] ;

//AMBIL DATA TERAPI
$query3 = "SELECT * FROM tblterapi where idterapi = '$vidterapi' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$vnamaterapi= $data3['namaterapi'] ;
$vketerangan= $data3['keteranganterapi'] ;
}
}

$query1   = "SELECT COUNT(*) AS jumData FROM tblgejala where 
	 	idgejala='$G01' OR idgejala='$G02' OR idgejala='$G03' OR idgejala='$G04' OR idgejala='$G05'
		OR idgejala='$G06' OR idgejala='$G07' OR idgejala='$G08' OR idgejala='$G09' OR idgejala='$G10' 
		
		OR idgejala='$G11' OR idgejala='$G12' OR idgejala='$G13' OR idgejala='$G14' OR idgejala='$G15' 
		OR idgejala='$G16' OR idgejala='$G17' OR idgejala='$G18' OR idgejala='$G19' OR idgejala='$G210' 
		
		OR idgejala='$G21' OR idgejala='$G22' OR idgejala='$G23' OR idgejala='$G24' OR idgejala='$G25' 
		OR idgejala='$G26' OR idgejala='$G27' OR idgejala='$G28' OR idgejala='$G29' OR idgejala='$G30' 
		
		OR idgejala='$G31' OR idgejala='$G32' OR idgejala='$G33' OR idgejala='$G34' OR idgejala='$G25' 
		OR idgejala='$G36' OR idgejala='$G37' OR idgejala='$G38' OR idgejala='$G39' OR idgejala='$G40' 
		
		OR idgejala='$G41' OR idgejala='$G42' OR idgejala='$G43' OR idgejala='$G44' OR idgejala='$G45'  ";
$hasil1  = mysql_query($query1);
$data1     = mysql_fetch_array($hasil1);
 
$jumData = $data1['jumData'];
if ($jumData>='3') {
echo "<a href='?mod=hasilkonsul1&id=$_GET[id]'> 
HASIL </a>";
}

else{
echo "Gangguan yang anda derita tidak dapat dideteksi, silahkan hubungi dokter.";
}

?>
