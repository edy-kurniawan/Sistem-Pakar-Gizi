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
$dataPerPage9 = 1; 
if(isset($_GET['page9']))
{
    $noPage9 = $_GET['page9'];
} 
else $noPage9 = 1;
$offset9 = ($noPage9 - 1) * $dataPerPage9;
$query9 = "SELECT * FROM tblgangguan   LIMIT $offset9, $dataPerPage9";
$result9 = mysql_query($query9) or die('Error'); 
// menampilkan data 
while($data9 = mysql_fetch_array($result9))
{
$vidgangguan = $data9['idgangguan'];
$vnamagangguan = $data9['namagangguan'];



}

//hitung data di tabel ganguan
$query9   = "SELECT COUNT(*) AS jumData FROM tblgangguan ";
$hasil9  = mysql_query($query9);
$data9     = mysql_fetch_array($hasil9);
$jumData9 = $data9['jumData'];
$jumPage9 = ceil($jumData9/$dataPerPage9);
if ($noPage9 > $jumPage9) echo " PERTANYAAN HABIS ";

// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
// ============================================================================================================ PENYAKIT ============================
?>

<?
$dataPerPage = 1; 
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1; 
$offset = ($noPage - 1) * $dataPerPage;
$query = "SELECT * FROM tblgejala where idgangguan ='$vidgangguan'   LIMIT $offset, $dataPerPage  ";
$result = mysql_query($query) or die('Error'); 
// menampilkan data 
while($data = mysql_fetch_array($result))
{
$vpertanyaan = $data['namagejala'];
?> <div align="center">  <? echo "PERTANYAAN <BR><BR><BR>
 Apakah anda $vpertanyaan ? <br>" ; ?> </div> <?
}
?>
<?
// mencari jumlah semua data dalam tabel guestbook
$query   = "SELECT COUNT(*) AS jumData FROM tblgejala where idgangguan ='$vidgangguan' ";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);
$jumData = $data['jumData'];
$jumPage = ceil($jumData/$dataPerPage);



for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
       //     if (($showPage == 1) && ($page != 2))  echo "..."; 
        //    if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
        //    if ($page == $noPage) echo " <b>".$page."</b> ";
       //     else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
            $showPage = $page;          
         }
} ?> 
<div align="center">
  <?
if ($noPage <= $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&page9=".($noPage9)."&mod=".(pertanyaan)."&id=".($_GET['id'])."'> YA </a>";
 ?> 
| 
<? 
if ($noPage <= $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page9=".($noPage9+1)."&mod=".(pertanyaan)."&id=".($_GET['id'])."'> TIDAK </a>";  echo " <br>"; 

if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."&page9=".($noPage9)."&mod=".(pertanyaan)."&id=".($_GET['id'])."'>&lt;&lt; Kembali kepertanyaan sebelumnya <BR></a>";



if ($noPage > $jumPage) echo "HASIL DIAGNOSA ANDA<BR>  <br> 
<a href='hasil.php?idgangguan=".($vidgangguan)."&namagangguan=".($vnamagangguan)."&id=".($_GET['id'])."' target='_blank'> LIHAT HASIL </a>";



?>




</div>
