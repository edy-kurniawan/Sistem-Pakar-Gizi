<? session_start() ;ob_start();
include "../config.php" ; 

$perintahnya = "select * from tbluser where id = '$_POST[cari]' ";
$jalankanperintahnya = mysql_query($perintahnya);
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);
if ($ada_apa_enggak >= 1)
{

$_SESSION['id']=$a;
$idpasien =$_SESSION['id'];

header("location:index.php?mod=lanjutkonsul&id=$_POST[cari]");
            
}
else
echo "Id Pasien Tidak Ditemukan, Silahkan Registrasi Terlebih Dahulu" ;     
echo "<meta http-equiv=Refresh content=1;url=index.php?mod=konsultasi>";