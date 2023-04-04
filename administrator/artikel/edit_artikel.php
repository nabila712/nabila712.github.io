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
$id_artikel = $_GET['id_artikel'];
$query = "SELECT * FROM artikel WHERE id_artikel='$id_artikel'";
$sql = mysqli_query ($koneksi,$query);
$hasil = mysqli_fetch_array ($sql);

$judul= $hasil['judul'];
$isi=$hasil['isi'];

?>
<div align="center">
<div class="panel panel-default">
    <div class="panel-heading">
        <font color="#000" size="4"><b>Edit Data Artikel</b></font>
    </div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form role="form" method="post" action="artikel/proses_edit.php" name="formeditartikel" id="formeditartikel" onsubmit="return kosong_artikel()" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0" width="580">

<tr><td height="15"></td></tr>
<tr>
	<td width="180" height="30">&nbsp;&nbsp;<label>Judul</label></td>
    <td width="385"><input type="text" name="judul" id="judul" size="50" class="form-control" value="<?php echo "$judul" ?>" /></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="200" height="30">&nbsp;&nbsp;<label>Deskripsi</label></td>
    <td width="306"><textarea class="form-control" name="isi" cols="25" rows="5"><?php echo "$isi" ?></textarea></td>
    <td width="15"></td>
</tr>

<tr><td height="15"></td></tr>
<tr>
<td></td>
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="edit" value="Edit" class="btn btn-primary" onClick="kosong_artikel(); return false;">&nbsp;
<input type="reset" name="reset" value="Reset" class="btn btn-default">
<!-- <input type="hidden" name="hid_kaos" value="<?php echo"$nextnoform"; ?> "> -->
<input type="hidden" name="hid_artikel" id="id_artikel" value="<?php echo"$id_artikel" ?>">
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