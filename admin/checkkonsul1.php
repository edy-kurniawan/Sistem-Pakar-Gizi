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
  <? 
echo "<br><br>Gejala yang anda derita :<br>";

$query31 = "SELECT * FROM detailkonsul where idkonsul= '' "; 
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
$no=$no+1; 

echo "$no. $b <br>" ; 

$cekk=$data3['idgangguan'];

}}

 
$query3 = "SELECT * FROM tblgangguan where idgangguan = '$cekk' "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$namagangguan= $data3['namagangguan'] ;
$ket= $data3['keterangangangguan'] ;
}
echo "<br>Gangguan yang anda derita : ";
echo "$namagangguan <br>";

echo "<br><strong>Terapi : </strong><br>  ";

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
$noo=$noo+1;echo "$noo. ";
echo "$vketerangan <br>";

}
}


 

echo "<a href='hasil.php?idgangguan=".($cekk)."&namagangguan=".($namagangguan)."&id=".($_GET['id'])."' target='_blank'> 
CETAK </a>";


?>
