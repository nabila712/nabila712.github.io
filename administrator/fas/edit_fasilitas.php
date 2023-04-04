<html>
<head>
<script language="javascript" src="../js/validasi.js"></script>
<link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui-1.9.2.custom.js"></script>
<script>
    $(function(){
        $("#tanggal").datepicker({
        format:'yyyy-mm-dd',
		changeMonth : true,
		changeYear : true,
		yearRange : "-50:+0",
		showOn: "button"
        });
    });
</script>
</head>
<body>
<?php
include "../config/koneksi.php";
$id_kaos = $_GET['id_kaos'];
$query = "SELECT * FROM kaos WHERE id_kaos='$id_kaos'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);

$id_kaos = $hasil['id_kaos'];
$nama= $hasil['nama_kaos'];
$hargab = $hasil['harga_beli'];
$hargaj = $hasil['harga_jual'];
$diskon = $hasil['diskon'];
$stok= $hasil['stok'];
$desk=$hasil['desk'];

?>
<div align="center">
<div class="panel panel-default">
    <div class="panel-heading">
        <font color="#000" size="4"><b>Edit Data Kaos</b></font>
    </div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form role="form" method="post" action="kaos/proses_edit.php" name="formeditkaos" id="formeditkaos" onsubmit="return kosong_kaos()" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0" width="580">

<tr><td height="15"></td></tr>
<tr>
	<td width="180" height="30">&nbsp;&nbsp;<label>Nama Kaos</label></td>
    <td width="385"><input type="text" name="nama" id="nama" size="50" class="form-control" value="<?php echo "$nama" ?>" /></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>

    <td width="200" height="30">&nbsp;&nbsp;<label>Harga Beli</label></td>
    <td width="306"><input type="text" name="harga_beli" id="harga_beli" size="50" class="form-control" value="<?php echo "$hargab" ?>"/></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="200" height="30">&nbsp;&nbsp;<label>Harga Jual</label></td>
    <td width="306"><input type="text" name="harga_jual" id="harga_jual" size="50" class="form-control" value="<?php echo "$hargaj" ?>"/></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="200" height="30">&nbsp;&nbsp;<label>Diskon</label></td>
    <td width="306"><input type="text" name="diskon" id="diskon" size="50" class="form-control" value="<?php echo "$diskon" ?>"/></td>
    <td width="15"></td>
</tr>

<tr><td height="15"></td></tr>
<tr>
	<td width="150" height="30">&nbsp;&nbsp;<label>Stok</label></td>
    <td width="356"><input type="text" name="stok" id="stok" class="form-control" value="<?php echo "$stok" ?>"/></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="200" height="30">&nbsp;&nbsp;<label>Deskripsi</label></td>
    <td width="306"><textarea class="form-control" name="desk" cols="25" rows="5"><?php echo "$desk" ?></textarea></td>
    <td width="15"></td>
</tr>

<tr><td height="15"></td></tr>
<tr>
<td></td>
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="edit" value="Edit" class="btn btn-primary" onClick="kosong_dosen(); return false;">&nbsp;
<input type="reset" name="reset" value="Reset" class="btn btn-default">
<!-- <input type="hidden" name="hid_kaos" value="<?php echo"$nextnoform"; ?> "> -->
<input type="hidden" name="hid_kaos" id="id_kaos" value="<?php echo"$id_kaos" ?>">
</td>
</tr>
<tr><td height="15"></td></tr>
</table>
</div>
</form>
</div>
</div>
</div>
</div>
<br />
</body>
</html>