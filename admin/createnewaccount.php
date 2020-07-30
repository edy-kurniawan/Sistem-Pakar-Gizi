<form action="simpankonsultasi.php" method="post" enctype="multipart/form-data" name="form1">
<style type="text/css">
<!--
.style1 {
	color: #660000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
    <table width="70%">
      <tr>
        <td width="30%">Nama Lengkap </td>
        <td><input name="username" type="text" id="username" size="30" required/></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td><input name="umur" type="text" id="umur" size="5" required/>
            <label>Thn</label></td>
      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td><label>
          <input name="jeniskelamin" type="radio" value="pria" />
          Pria
          <input name="jeniskelamin" type="radio" value="wanita" />
          Wanita</label></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><input name="pekerjaan" type="text" id="pekerjaan" size="30" required/>
            <label></label></td>
      </tr>
      <tr>
        <td valign="top">Alamat</td>
        <td><label>
          <textarea name="alamat" cols="30" id="alamat" required></textarea>
          <br>
        </label></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Daftar" /></td>
      </tr>
    </table>
