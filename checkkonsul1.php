<?php
include "library/koneksi.php";
session_start();
$tgl= date('d-m-Y');
$sql = mysql_query("SELECT * FROM user where id_user='$_SESSION[namauser]'");
$hasil=mysql_fetch_array($sql);
$id=$hasil[id_user];

echo "<table width=78%><tr><td align='right'>$tgl</td></tr><tr><td align='right'>
<button onclick='window.print()'>Cetak Hasil Konsultasi</button></td></tr></table>";

echo "Id Pasien : $hasil[id_user] <br>
Nama Pasien : $hasil[nama_lengkap] <br>";
echo "Umur : $hasil[umur] Thn <br>";
echo "Tinggi Badan : $hasil[tinggi_badan]<br>";
echo "Berat Badan : $hasil[berat_badan]<br>";
// =========================================================================================================== PENYAKIT  
echo "<h3>Gejala yang anda derita :</h3>";
// $query51 = mysql_query("SELECT * FROM tblkonsultasi where id_pasien= '$id' order by id desc "); 
// $data51 = mysql_fetch_array($query51);
// $cekk=$data51['id_tingkatgizi'];

$query31 = "SELECT * FROM detailkonsul where idkonsul= '$id' "; 
$result31 = mysql_query($query31) or die('Error');
while($data31 = mysql_fetch_array($result31))
{
//panggil data dari tabel, jadikan variabel
$idkon= $data31['idgejala'] ;


$query3 = "SELECT * FROM tblgejala where idgejala= '$idkon' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$b= $data3['namagejala'] ;
$x= $data3['tingkatgizi'] ;
$no=$no+1; 
echo "$no. $b<br>" ;  // echo "<h4>$no. $b</h4><p>" ;
}

//show solusi begin
$tblgejala_gizi = "SELECT * FROM tblgejala_gizi where idgejala = '$idkon' "; 
$rtblgejala_gizi = mysql_query($tblgejala_gizi) or die('Error');
while($hasil = mysql_fetch_array($rtblgejala_gizi))
{
//panggil data dari tabel, jadikan variabel
$id_tingkatgizi= $hasil['id_tingkatgizi'] ;
}

	$Solusi = "SELECT * FROM tbltingkatgizi_solusi where idtingkatgizi='$id_tingkatgizi'"; 
	$rSolusi = mysql_query($Solusi) or die('Error');
	while($hSolusi = mysql_fetch_array($rSolusi))
	{
	//panggil data dari tabel, jadikan variabel
	$idsolusi= $hSolusi['idsolusi'] ;
	}

		$tblsolusi = "SELECT * FROM tblsolusi where idsolusi='$idsolusi'"; 
		$rtblsolusi = mysql_query($tblsolusi) or die('Error');
		while($htblsolusi = mysql_fetch_array($rtblsolusi))
		{
		//panggil data dari tabel, jadikan variabel
		$keterangansolusi= $htblsolusi['keterangansolusi'] ;
		$total += $x;
		// echo "<b>solusi => </b>";
		// echo "$keterangansolusi";
		// echo "<br>";
		// echo "$x %";
		}

}

if($total < 50){ $tingkatgizi = "Kekurangan"; $tidsolusi = "S001";}
elseif($total >= 50 && $total < 100){ $tingkatgizi = "Cukup"; $tidsolusi = "S002";}
elseif($total > 100){ $tingkatgizi = "Kelebihan"; $tidsolusi = "S003";}
else{ $tingkatgizi = ""; $tidsolusi = "S001";}
echo "<h4>Dari gejala tersebut anda Menderita <strong>'$tingkatgizi'</strong> tingkat gizi dengan tingkat Keyakinan <strong>$total %</strong><br></h4>";

//tampil solusi
$tsolusi = "SELECT * FROM tblsolusi where idsolusi='$tidsolusi'"; 
	$rtsolusi = mysql_query($tsolusi) or die('Error');
	while($htsolusi = mysql_fetch_array($rtsolusi))
	{
	//panggil data dari tabel, jadikan variabel
	$tampil= $htsolusi['keterangansolusi'] ;
	echo "<h3>Solusi :</h3><p>$tampil</p>";
	}

//save ke tblkonsul
$date=date("d/m/Y");
$querysave = "INSERT INTO tblkonsultasi (tgl,id_pasien,idtingkatgizi,persen) 
VALUES ('$date','$_SESSION[namauser]','$tingkatgizi','$total')";
$resultsave = mysql_query($querysave)
or die(mysql_error());

	



 
// $query3 = "SELECT * FROM tbltingkat_gizi where id_tingkatgizi = '$cekk' "; 
// $result3 = mysql_query($query3) or die('Error');
// while($data3 = mysql_fetch_array($result3))
// {
// //panggil data dari tabel, jadikan variabel
// $nama_tingkatgizi= $data3['nama_tingkatgizi'] ;
// $ket= $data3['keterangantingkatgizi'] ;
// }
// echo "<br>Gangguan yang anda derita : ";
// echo "$nama_tingkatgizi <br>
// <strong>Dari gejala tersebut anda tergolong tingkat gizi dengan tingkat keyakinan $data51[persen] %</strong><br>";

// echo "<br><strong>Solusi : </strong><br>  ";


// if ($data51[persen]<'25') 	{
// 		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' "; 
// 		}
// if ($data51[persen]>='25' and $data51[persen]<'50') 	{
// 		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' "; 
// 		}
// if ($data51[persen]>='50' and $data51[persen]<'75') 	{
// 		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' or idsolusi = 'S1' "; 
// 		}
// if ($data51[persen]>='75' and $data51[persen]<='100') 	{
// 		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' or idsolusi = 'S1' or idsolusi = 'S3' "; 
// 		}
		
// $result3 = mysql_query($query3) or die('Error');
// while($data3 = mysql_fetch_array($result3))
// {
// //panggil data dari tabel, jadikan variabel
// $vnamasolusi= $data3['namasolusi'] ;
// $vketerangan= $data3['keterangansolusi'] ;
// $noo=$noo+1;echo "$noo. ";
// echo "$vketerangan <br>";

// }


// echo "<a href='hasil.php?id_tingkatgizi=".($cekk)."&nama_tingkatgizi=".($nama_tingkatgizi)."&id=".($_GET['id'])."' target='_blank'> 
// CETAK </a>";


?>
