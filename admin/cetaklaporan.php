<html>
<title>Laporan Data Pasien</title>
<body>
  <?php 
  include '../library/koneksi.php';
  ?>

 <h2 align="center">Laporan Data Pasien</h2><hr> 
  <table width="100%" border="1" bordercolor="#000000">
      <tr bgcolor="#999999">
        <td valign="top"><strong>No.</strong></td>
        <td valign="top"><strong>Nama Lengkap</strong></td>
        <td><strong>Id pasien</strong></td>
        <td><strong>Umur</strong></td>
        <td><strong>Jenis Kelamin</strong></td>
    </tr>
    <?php 
        $no = 1;
    $query=mysql_query("SELECT * FROM user Where level='user'");
      while($row=mysql_fetch_array($query))
      {
        echo "
        <tr>
          <td>".$no++."</td>
          <td>".$row['nama_lengkap']."</td>
          <td>".$row['id_user']."</td>
          <td>".$row['umur']."</td>
          <td>".$row['jk']."</td>
        </tr>
        ";
      }
    ?>
  </table>
 
  <script>
    window.print();
  </script>
 
</body>
</html>