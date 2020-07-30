<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {
	color: #0000FF;
	font-style: italic;
}
-->
</style>
</head>
<body>
<? echo "Id Pasien : $_GET[id] <br>";
$sql = mysql_query("SELECT * FROM tbluser where id=$_GET[id]");
$hasil=mysql_fetch_array($sql);
echo "Nama : $hasil[username] <br>";
echo "Jenis Kelamin : $hasil[jeniskelamin] <br>";
echo "Umur : $hasil[umur] Thn <br>";
echo "Alamat : $hasil[alamat] <br>";
?>
<form id="form1" name="form1" action=""> 
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center" class="style1"><span class="style2"><a href="?mod=tablekonsul&id=<? echo "$_GET[id]";?>">Klik Disini</a></span> Untuk Lanjut Ke Pertanyaaan </p>
  <p>&nbsp;</p>
</form>
