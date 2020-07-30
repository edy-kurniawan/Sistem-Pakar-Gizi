<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
<body onload=javascript:window:print()>
<?php session_start() ;ob_start();  ?>
<? include "../config.php" ; 
$id =$_GET['id'];
$vidgangguan = $_GET['idgangguan'];
$vnamagangguan = $_GET['namagangguan'];


	if(!$vidgangguan)  { 
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
<?
 //ABIL DATA PENYAKIT user
 $no = 1;
$query5 = "SELECT * FROM tbluser where id= '$id' "; 
$result5 = mysql_query($query5) or die('Error');
while($data5 = mysql_fetch_array($result5))
{
//panggil data dari tabel, jadikan variabel
$pengunjung= $data5['username'] ;
$u= $data5['umur'] ;
$j= $data5['jeniskelamin'];
$p= $data5['pekerjaan'];
$alam= $data5['alamat'];
}
?>
</strong>
  <table width="900" border="1">
    <tr>
      <td><table width="900">
        <tr>
          <td colspan="2" class="style3"><div align="center" class="style4">HASIL DIAGNOSA ANDA <HR /></div></td>
          </tr>
        <tr>
          <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
          </tr>
        <tr>
          <td width="230"><strong>NAMA USER </strong></td>
          <td width="660"><strong>: <? echo "$nama" ; ?></strong></td>
        </tr>
		<tr>
          <td width="230"><strong>UMUR</strong></td>
          <td width="660"><strong>: <? echo "$u" ; ?></strong></td>
        </tr>
		  <tr>
        <td width="230"><strong>JENIS KELAMIN</strong></td>
          <td width="660"><strong>: <? echo "$j" ; ?></strong></td>
        </tr>
		 <tr>
        <td width="230"><strong>PEKERJAAN</strong></td>
          <td width="660"><strong>: <? echo "$p" ; ?></strong></td>
        </tr>
		<tr>
        <td width="230"><strong>ALAMAT</strong></td>
          <td width="660"><strong>: <? echo "$alam" ; ?></strong></td>
        </tr>
        <tr>
          <td ><strong>GANGGUAN YANG DI DERITA </strong></td>
          <td><strong>: TIDAK TERDETEKSI</strong></td>
        </tr>
        <tr>
          <td colspan="2" >* Hubungi Psikolog Untuk Pemeriksaan Lebih Lanjut !</td>
          </tr>
        <tr>
          <td colspan="2" align="right">Psikolog <br><br> <?
			$okay = mysql_query("SELECT * FROM tbladmin where status= 'pakar' ");
			$lll=mysql_fetch_array($okay);
			echo "$lll[nama]";
		   ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
    <?
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
<?
 //ABIL DATA PENYAKIT user
 $no = 1;
$query5 = "SELECT * FROM tbluser where id= '$id' "; 
$result5 = mysql_query($query5) or die('Error');
while($data5 = mysql_fetch_array($result5))
{
//panggil data dari tabel, jadikan variabel
$pengunjung= $data5['username'] ;
$u= $data5['umur'] ;
$j= $data5['jeniskelamin'];
$p= $data5['pekerjaan'];
$alam= $data5['alamat'];
}
$date=date("d/m/Y");

$querysave = "INSERT INTO tblkonsultasi       
          (tgl,id_pasien,id_gangguan) 
VALUES ('$date','$id','$vidgangguan')";
$resultsave = mysql_query($querysave)
or die(mysql_error());

$query51 = mysql_query("SELECT * FROM tblkonsultasi order by id desc "); 
$data51 = mysql_fetch_array($query51);


mysql_query(" update detailkonsul SET  
idkonsul='$data51[id]' where idkonsul=''");

?>
</strong>
<div align="center">
  <table width="900" border="1">
    <tr>
      <td><table width="100%">
        <tr>
          <td colspan="2" class="style3"><div align="center" class="style4">HASIL DIAGNOSA ANDA <HR /></div></td>
          </tr>
        <tr>
          <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
          </tr>
        <tr>
          <td width="230"><strong>NAMA USER </strong></td>
          <td width="660"><strong>: <? echo "$pengunjung" ; ?></strong></td>
        </tr>
		<tr>
          <td width="230"><strong>UMUR</strong></td>
          <td width="660"><strong>: <? echo "$u" ; ?></strong></td>
        </tr>
		  <tr>
        <td width="230"><strong>JENIS KELAMIN</strong></td>
          <td width="660"><strong>: <? echo "$j" ; ?></strong></td>
        </tr>
		 <tr>
        <td width="230"><strong>PEKERJAAN</strong></td>
          <td width="660"><strong>: <? echo "$p" ; ?></strong></td>
        </tr>
		<tr>
        <td width="230"><strong>ALAMAT</strong></td>
          <td width="660"><strong>: <? echo "$alam" ; ?></strong></td>
        </tr>
        <tr>
          <td><strong>GANGGUAN YANG DI DERITA </strong></td>
          <td><strong>: <? echo "$vnamagangguan" ; ?></strong></td>
        </tr>
      </table>
	
	    <table width="100%">
          <tr>
            <th width="230" scope="col"><div align="left"><strong>GEJALA  </strong></div></th>
            <th width="660" scope="col"><div align="left"><strong>:</strong></div></th>
          </tr>
        </table> 
	    <strong>
	    <?
 //ABIL DATA PENYAKIT TERAPI
 $no = 1;
$query31 = "SELECT * FROM detailkonsul where idkonsul= '$data51[id]' "; 
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

?>
	    </strong>
	    <table width="100%">

          <tr>
            <td width="230">&nbsp;</td>
            <td width="648"><strong><? echo "$no. $b" ; ?></strong></td>
          </tr> 
        </table>
		<strong>
       <? $no=$no+1; } }?>
	  </strong></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td><strong>SOLUSI </strong></td>
    </tr>
    <tr>
     <td> <strong>
       <?
 //ABIL DATA PENYAKIT TERAPI
$no = 1;

$query = "SELECT * FROM tblgangguanterapi where idgangguan = '$vidgangguan'"; 
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
?>    
    
    
 
    
     </strong>
       <table width="100%">
       
        <tr>
          <td>&nbsp;</td>
          <td class="style12"><div align="justify"><? echo "$no. $vketerangan" ; ?></div></td>
          <td>&nbsp;</td>
        </tr>
      </table> 
       <p><strong>
         <?  $no=$no+1; } ?>
       </strong></p>
       <p>* Jika gangguan berlanjut hubungi Psikolog atau Dokter. <span class="style1">Terima Kasih. </span></p></td>
    </tr>
        <tr>
          <td colspan="2" align="right">Psikolog <br><br> <?
			$okay = mysql_query("SELECT * FROM tbladmin where status= 'pakar' ");
			$lll=mysql_fetch_array($okay);
			echo "$lll[nama]";
		   ?></td>
          </tr>
  </table> 
</div>
</body>
