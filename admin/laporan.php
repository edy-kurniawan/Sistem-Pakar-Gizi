<a href="?mod=cetak">Cetak Laporan<img src="print.png" /></a>
<table width="100%" border="1" bordercolor="#000000">
      <tr bgcolor="#999999">
        <td valign="top"><strong>No.</strong></td>
        <td valign="top"><strong>Nama Lengkap</strong></td>
        <td><strong>Id pasien</strong></td>
        <td><strong>Alamat</strong></td>
        <td><strong>Umur</strong></td>
        <td><strong>Jenis Kelamin</strong></td>
        <td><strong>Kode / Nama Gangguan</strong></td>
        <td><strong>Gejala</strong></td>
        <td><div align="center"><strong>Tgl</strong></div></td>
      </tr>
	  	<?php 
$dataPerPage = 10;
 
// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut, 
// sedangkan apabila belum, nomor halamannya 1.
 
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1; 
// perhitungan offset 
$offset = ($noPage - 1) * $dataPerPage;
// query SQL untuk menampilkan data perhalaman sesuai offset 
//panggil data dari tabel
$querya = "SELECT * FROM tblkonsultasi ORDER BY id DESC LIMIT $offset, $dataPerPage"; 
$resulta = mysql_query($querya) or die('Error');
while($dataa = mysql_fetch_array($resulta))
{
$queryg = "SELECT * FROM tblgangguan where idgangguan='$dataa[id_gangguan]' "; 
$resultg = mysql_query($queryg) or die('Error');
while($datak = mysql_fetch_array($resultg))
{
//panggil data dari tabel, jadikan variabel
$a= $data['username'] ;
$query = "SELECT * FROM tbluser where id='$dataa[id_pasien]' "; 
$result = mysql_query($query) or die('Error');
while($data = mysql_fetch_array($result))
{
//panggil data dari tabel, jadikan variabel
$a= $data['username'] ;
$c= $data['email'] ;
$d= $data['umur'] ;
$e= $data['jeniskelamin'] ;
$f= $data['pekerjaan'] ;
$g= $data['alamat'] ;
$no=$no+1;
} 
?>
      <tr>
        <td valign="top"><?php echo "$no"; ?></td>
        <td valign="top"><?php echo "$a " ; ?></td>
        <td><?php echo "$dataa[id_pasien]" ;?></td>
        <td><?php echo "$g" ;?></td>
        <td valign="top"><?php echo "$d " ; ?></td>
        <td valign="top"><?php echo "$e" ; ?></td>
        <td valign="top"><?php echo "$dataa[id_gangguan]"; ?> / <?php echo "$datak[namagangguan]"; ?></td>
        <td valign="top"><?php
			$queryg = "SELECT * FROM tblgejala where idgangguan='$dataa[id_gangguan]' "; 
			$resultg = mysql_query($queryg) or die('Error');
			while($datag = mysql_fetch_array($resultg))
			{
			echo"$datag[namagejala],";
			} 
		
		?></td>
        <td valign="top"><div align="center"> <?php echo $dataa['tgl']; ?></div></td>
      </tr>
          <?php
 }}

?>
      <tr>
        <td colspan="9" valign="top">
		  Page : 
      <?php
 
// mencari jumlah semua data dalam tabel guestbook
 
$query   = "SELECT COUNT(*) AS jumData FROM tblkonsultasi ";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);
 
$jumData = $data['jumData'];
 
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
 
$jumPage = ceil($jumData/$dataPerPage);
 
// menampilkan link previous
 
if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?mod=laporan&page=".($noPage-1)."'>&lt;&lt; Prev</a>";
 
// memunculkan nomor halaman dan linknya
 
for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
            if (($showPage == 1) && ($page != 2))  echo "..."; 
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?mod=laporan&page=".$page."'>".$page."</a> ";
            $showPage = $page;          
         }
}
 
// menampilkan link next
 
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?mod=laporan&page=".($noPage+1)."'>Next &gt;&gt;</a>";
 
?>    

		
		</td>
      </tr>
      
    </table>
     
