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
    <li class="breadcrumb-item active">Tambah Data Dokter Poli</li>
</ol>
<?php
include "../config/koneksi.php";
?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Tambah Data Dokter Poli</div>
    <div class="card-body">
<div class="table-responsive">
<form role="form" method="post" action="relasi/proses_tambah.php" name="forminputrelasi" id="forminputrelasi" enctype="multipart/form-data">
<table width="650">
<tr><td height="15"></td></tr>
<tr>
	<td width="230" height="30">&nbsp;&nbsp;<label>Nama Poli</label></td>
    <td width="400">
    <select name="poli" class="form-control">
        <option value="">- Pilih Poli-</option>
        <?php
        $sql = mysqli_query($koneksi,"select * from poli");
        while($r = mysqli_fetch_array($sql))
        {
        ?>
            <option value="<?php echo "$r[id_poli]" ?>"><?php echo "$r[nama_poli]" ?></option>
        <?php
        }
        ?>
    </select>
    </td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="230" height="30">&nbsp;&nbsp;<label>Nama Dokter</label></td>
    <td width="400">
    <select name="dokter" class="form-control">
        <option value="">- Pilih Dokter -</option>
        <?php
        $sql = mysqli_query($koneksi,"select * from dokter");
        while($r = mysqli_fetch_array($sql))
        {
        ?>
            <option value="<?php echo "$r[id_dokter]" ?>"><?php echo "$r[nama_dok]" ?></option>
        <?php
        }
        ?>
    </select>
    </td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
    <td width="230" height="30">&nbsp;&nbsp;<label>Nama Jadwal</label></td>
    <td width="400">
    <select name="jadwal" class="form-control">
        <option value="">- Pilih Jadwal -</option>
        <?php
        $sql = mysqli_query($koneksi,"select * from jadwal");
        while($r = mysqli_fetch_array($sql))
        {
        ?>
            <option value="<?php echo "$r[id_jadwal]" ?>"><?php echo "$r[hari], $r[waktu]" ?></option>
        <?php
        }
        ?>
    </select>
    </td>
    <td width="15"></td>
</tr>
<tr><td height="15"></td></tr>
<tr>
<td></td>
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="proses" value="Simpan" class="btn btn-primary" onClick="kosong_relasi(); return false;">&nbsp;
<input type="reset" name="reset" value="Reset" class="btn btn-default">
</td>
</tr>
<tr><td height="15"></td></tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>