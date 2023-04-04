<html>
<head>
<script language="javascript" src="../js/validasi.js"></script>
<link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui-1.9.2.custom.js"></script>
<script src="../javascript/validasi.js"></script>

<script>
    $(function(){
        $("#tanggal").datepicker({
        format:'yyyy-mm-dd'
        });
    });
</script>
</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Tambah Fasilitas</li>
</ol>
<?php
include "../config/koneksi.php";
// $today = date("dmY");
// $query = "select max(id_kaos) as last from kaos";
// $query2 = "select id_kaos from kaos";

// $hasil = mysql_query($query);
// $data = mysql_fetch_array($hasil);
// $lastno = $data['last'];

// $hasil2 = mysql_query($query2);

// if (mysql_num_rows($hasil2)>0)
// {
// $lastnourut = substr($lastno,2,3);
// $nextnourut = $lastnourut + 1;
// $nextnoform = sprintf('O-%03s',$nextnourut);
// }else{
// $nextnoform = sprintf('O-%03s',1);
// }
?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Fasilitas</div>
          <div class="card-body">
            <div class="table-responsive">
<form role="form" method="post" action="fas/proses_tambah.php" name="forminputfas" id="forminputfas" enctype="multipart/form-data">
<table width="650">

<tr><td height="15"></td></tr>
<tr>

	<td width="230" height="30">&nbsp;&nbsp;<label>Nama Fasilitas</label></td>
    <td width="400"><input type="text" name="nama" id="nama" size="50" class="form-control" placeholder="Masukkan Nama Fasilitas"/></td>
    <td width="15"></td>
</tr>
<!-- <tr><td height="15"></td></tr>
<tr>
	<td width="150" height="30">&nbsp;&nbsp;<label>Satuan</label></td>
    <td width="356">
		<select name="satuan" id="satuan" class="form-control">
			<option value="0" selected>- Pilih Satuan -</option>
			<option value="pcs">pcs</option>
			<option value="lusin">Lusin</option>
			<option value="kodi">Kodi</option>
            <option value="gross">Gross</option>
		</select>
	</td>
    <td width="15"></td>
</tr> -->
<tr><td height="15"></td></tr>
<tr>
    <td width="200" height="30">&nbsp;&nbsp;<label>Keterangan</label></td>
    <td width="306"><textarea class="form-control" name="ket" cols="25" rows="5"></textarea></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td height="24">&nbsp;&nbsp;<label>Foto Fasilitas</label></td>
	<td><input type="file" name="foto" id="foto" class="form-control"/></td>
</tr>
<tr>
   	<td>&nbsp;</td>
    <td><b>Ukuran File Max : 1 Mb/ 1024 Kb dan jenis file : .jpg atau .jpeg</b></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
<td></td>
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="proses" value="Simpan" class="btn btn-primary" onClick="kosong_dosen(); return false;">&nbsp;
<input type="reset" name="reset" value="Reset" class="btn btn-default">
</td>
</tr>
<tr><td height="15"></td></tr>
</table>
</div>
</form>
</div>
</div>
</div>
</body>
</html>