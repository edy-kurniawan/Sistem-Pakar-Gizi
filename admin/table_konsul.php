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
    <th colspan="3"><div align="left">Pertanyaan :</div></th>
</table>
<div class="data">
<form method="post" action="?mod=hasilkonsul&id=<? echo"$_GET[id]" ?>">
<table   class="data">
  <? 
	 $hasil=mysql_query("Select * From tblgejala"); 
	 $warna1="#FFFFFF"; //baris genap berwarna putih
	 $warna2="#CCFFFF"; //baris genap berwarna cyan muda
	 $warna=$warna1; //warna default
	 
	 $no=1;
	 while ($data=mysql_fetch_array($hasil))
	 {
	 $id_kategori=$data['idgejala'];
		 if ($warna==$warna1) {
		 $warna=$warna2;}
		 else {
		 $warna=$warna1;} ?>

<?	 echo " <tr bgcolor='$warna' class='data'> 
			<td width='10' align='center'>" ?>
			<input name="<? echo "$data[idgejala]";?>" type="checkbox" id="<? echo "$data[idgejala]";?>" value="<? echo "$data[idgejala]";?>" />
<?	 echo " </td>
			<td class='data'>$data[idgejala] $data[namagejala]</td> "; ?>
<?	echo "	 </tr>";
	 $no++;
	 } 
			?>
		<tr > <td colspan="3"> <input name="Submit" type="submit" value="Simpan" /></td></tr>
</table></form> 
</div>

