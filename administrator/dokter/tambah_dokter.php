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
    <li class="breadcrumb-item active">Tambah Dokter</li>
</ol>
<?php
include "../config/koneksi.php";
?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tambah Data Dokter</div>
          <div class="card-body">
            <div class="table-responsive">
<form role="form" method="post" action="dokter/proses_tambah.php" name="forminputdokter" id="forminputdokter" enctype="multipart/form-data">
<table width="650">

<tr><td height="15"></td></tr>
<tr>

	<td width="230" height="30">&nbsp;&nbsp;<label>Nama Dokter</label></td>
    <td width="400"><input type="text" name="nama" id="nama" size="50" class="form-control" required="" placeholder="Masukkan Nama Dokter"/></td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
<td></td>
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="proses" value="Simpan" class="btn btn-primary" onClick="kosong_dokter(); return false;">&nbsp;
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