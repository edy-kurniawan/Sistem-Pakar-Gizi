 <?php
//=========================================================================================mulai
include "library/koneksi.php";
			$jj = "SELECT COUNT(*) AS jumData1 FROM detailkonsul where idkonsul='1' "; 
			$jjr = mysql_query($jj) or die('Error');
			$dj = mysql_fetch_array($jjr);

			$dj1 = $dj['jumData1'];			
			$dj2 = $dj1/2;			
			echo "1. $dj1 <br>";
$query3 = "SELECT * FROM tblgangguan order by idgangguan ASC "; 
$result3 = mysql_query($query3) or die('Error');
while($data3 = mysql_fetch_array($result3))
{
//panggil data dari tabel, jadikan variabel
$id= $data3['idgangguan'] ;

	$query1   = "SELECT COUNT(*) AS jumData FROM tblgejala where 
				idgangguan='$id'  ";
	$hasil1  = mysql_query($query1);
	$data1     = mysql_fetch_array($hasil1);
	 
	$jumData = $data1['jumData'];
	echo "<br>$jumData $id ";

	if ($jumData==$dj1) {
	echo "Proses Pencarian";
		$query33 = "SELECT * FROM tblgejala where idgangguan='$id'"; 
		$result33 = mysql_query($query33) or die('Error');
		while($data33 = mysql_fetch_array($result33))
		{
		
		$idgejala= $data33['idgejala'] ;
		
				$query33a = "SELECT * FROM detailkonsul where idkonsul='1'"; 
				$result33a = mysql_query($query33a) or die('Error');
				while($data33a = mysql_fetch_array($result33a))
				{
				$idgejalaa= $data33a['idgejala'] ;
					if ($idgejalaa==$idgejala) {
					echo "<br>hasil : $data33[idgangguan]";
					
					}
					else {
					echo "<br>tidak terdeteksi";
					}
				}
				
		
		//panggil data dari tabel, jadikan variabel
//		echo "<br>$idgejala";
//		echo "<a href='?mod=hasilkonsul1&id=$_GET[id]&h=$data33[idgangguan]'> HASIL </a>";
		}
	}
	
	else {
	echo "Penyakit Tidak Terdeteksi <br>";
	}
				

}
//=========================================================================================berakhir
?>
