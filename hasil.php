<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<title>Hasil Konsultasi Sistem Pakar Tingkat Gizi Lansia</title><body onload=javascript:window:print()>
<?php session_start() ;ob_start();  ?>
<?php include "library/koneksi.php" ; 
$id =$_GET['id'];
$idp = $_GET['idtingkatgizi'];
$tgl= date('d-m-Y');

	if(!$idp)  { 
	?>
    
<style type="text/css">
<!--
.style3 {font-weight: bold}
.style4 {font-size: 24px}
.style12 {font-weight: bold}
.style16 {font-weight: bold}
-->
</style>


<div align="center">
<strong>
<?php
 //ABIL DATA PENYAKIT user
 $no = 1;
$query5 = "SELECT * FROM user where id_user= '$id' "; 
$result5 = mysqli_query($query5) or die('Error');
while($data5 = mysqli_fetch_array($result5))
{
//panggil data dari tabel, jadikan variabel
$nama= $data5['nama_lengkap'] ;
$u= $data5['umur'] ;
$j= $data5['jk'];
$p= $data5['pekerjaan'];
$alam= $data5['alamat'];
}
?>
</strong>
  <table width="75%">
    <tr>
      <td><table width="100%">
        <tr>
          <td colspan="2" class="style3"><div align="center" class="style4">
            <p align="center"><strong><img src="images/header.jpg"/></strong></p>
            <HR /></div></td>
          </tr>
        <tr>
          <td colspan="2" align="right"> Tanggal : <?php echo"$tgl"; ?></td>
        </tr>
        <tr>
          <td width="230"><strong>NAMA PASIEN </strong></td>
          <td width="660"><strong>: <?php echo "$nama" ; ?></strong></td>
        </tr>
		<tr>
          <td width="230"><strong>UMUR</strong></td>
          <td width="660"><strong>: <?php echo "$u" ; ?></strong></td>
        </tr>
        <tr>
          <td ><strong>KELUHAN  </strong></td>
          <td><strong>: TIDAK TERDETEKSI</strong></td>
        </tr>
        <tr>
          <td colspan="2" ><p><p>* Silahkan hubungi Dokter untuk pemeriksaan lebih lanjut. <span class="style1">Terima Kasih. </span></p>
</td>
          </tr>
        <tr>
          <td colspan="2" align="right">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  </table>

<table width="100%">
        <tr>
          <td></td>
          <td width="20%" align="center">Dokter
		  <br><br><br><br>
		  </td>
        </tr>
</table>
</div>
    <?php
	exit();
	}
//====================================================================================================
//=====================================================================================================
?>
<style type="text/css">
<!--
.style3 {font-weight: bold}
.style4 {font-size: 24px}
.style12 {font-weight: bold}
.style16 {font-weight: bold}
-->
</style>


<strong>
<?php
 //ABIL DATA PENYAKIT user
 $no = 1;
$query5 = "SELECT * FROM user where id_user= '$id' "; 
$result5 = mysqli_query($query5) or die('Error');
while($data5 = mysqli_fetch_array($result5))
{
//panggil data dari tabel, jadikan variabel
$nama= $data5['nama_lengkap'] ;
$u= $data5['umur'] ;
$j= $data5['jk'];
$p= $data5['pekerjaan'];
$alam= $data5['alamat'];
}
$date=date("d/m/Y");


$query51 = mysqli_query("SELECT * FROM tblkonsultasi order by id desc "); 
$data51 = mysqli_fetch_array($query51);



?>
</strong>
<div align="center">
  <table width="75%">
    <tr>
      <td><table width="100%" bordercolor="#3399FF">
        <tr>
          <td colspan="2" class="style3"><div align="center" class="style4">
            <p align="center"><strong><img src="images/header.jpg"/></strong></p>
            <HR /></div></td>
        </tr>
        <tr>
          <td colspan="2" align="right"> Tanggal : <?php echo"$tgl"; ?></td>
        </tr>
        <tr>
          <td width="230"><strong>NAMA PASIEN </strong></td>
          <td width="660"><strong>: <?php echo "$nama" ; ?></strong></td>
        </tr>
		<tr>
          <td width="230"><strong>UMUR</strong></td>
          <td width="660"><strong>: <?php echo "$u" ; ?></strong></td>
        </tr>
    <tr>
      <td><strong>GOAL </strong> </td>
      <td><strong>: <?php echo "$_GET[namagangguan]"; ?></strong> </td>
    </tr>
      </table>
	
	    <table width="100%">
          <tr>
            <td><strong>GEJALA  :</strong></td>
          </tr>
        </table> 
	    <strong>
	    <?php
 //AMBIL DATA PENYAKIT TERAPI
 $no = 1;

$query31 = "SELECT * FROM detailkonsul where idkonsul= '$data51[id]' "; 
$result31 = mysqli_query($query31) or die('Error');
while($data31 = mysqli_fetch_array($result31))
{
//panggil data dari tabel, jadikan variabel
$idkon= $data31['idgejala'] ;


$query312 = "SELECT * FROM tblgejala where idgejala= '$idkon' "; 
$result312= mysqli_query($query312) or die('Error');
while($data312 = mysqli_fetch_array($result312))
{
//panggil data dari tabel, jadikan variabel
$nk= $data312['namagejala'] ;

?>
	    </strong>
	    <table width="100%">

          <tr>
            <td><?php echo "$no. $nk" ; ?></td>
          </tr> 
        </table>
		<strong>
       <?php $no=$no+1; } }?>
	  </strong></td>
    </tr>
	
    <tr >
      <td><strong>Dari gejala tersebut anda Tergolong Tingkat Gizi Dengan Tingkat Keyakinan <?php echo"$data51[persen]"; ?> %</strong></td>
    </tr>
    <tr >
      <td><strong>SOLUSI :</strong></td>
    </tr>
    <tr>
     <td>
       <?php
 //AMBIL DATA PENYAKIT TERAPI
$no = 1;

if ($data51[persen]<'25') 	{
		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' "; 
		}
if ($data51[persen]>='25' and $data51[persen]<'50') 	{
		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' "; 
		}
if ($data51[persen]>='50' and $data51[persen]<'75') 	{
		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' or idsolusi = 'S1' "; 
		}
if ($data51[persen]>='75' and $data51[persen]<='100') 	{
		$query3 = "SELECT * FROM tblsolusi where idsolusi = 'S2' or idsolusi = 'S5' or idsolusi = 'S4' or idsolusi = 'S1' or idsolusi = 'S3' "; 
		}
$result3 = mysqli_query($query3) or die('Error');
while($data3 = mysqli_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$vnamasolusi= $data3['namasolusi'] ;
$vketerangan= $data3['keterangansolusi'] ;
$noo=$noo+1;echo "$noo. ";
echo "$vketerangan <br>";

}

?>    
    
    
 
    

<p><p>* Jika penyakit berlanjut, silahkan konsultasi langsung dengan Dokter. <span class="style1">Terima Kasih. </span></p>

<table width="100%">
        <tr>
          <td></td>
          <td width="20%" align="center">Dokter
		  <br><br><br><br>
		  </td>
        </tr>
</table>

</body>
