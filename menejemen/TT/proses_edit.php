<?php
include "../../config/koneksi.php";

$id_kamar = $_POST['hid'];
$kelas = $_POST['kelas'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];
$tersedia = $_POST['tersedia'];

if (!empty($nama) && !empty($kapasitas) && !empty($tersedia)) {

	$query = "UPDATE kamar SET id_kls='$kelas',nm_ruang='$nama', kapasitas='$kapasitas', tersedia='$tersedia' WHERE id_kamar='$id_kamar'";
	$sql = mysqli_query($koneksi, $query);
	if ($sql) {
		echo "<script>alert('Data TT Telah Dirubah');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index1.php?Page=TT\">";
	} else {
		echo "<script>alert('DATA TT GAGAL DIRUBAH');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index1.php?Page=TT\">";
	}
} else {
	echo "<script>alert('Data TT Belum Lengkap');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
	url=../index1.php?Page=TT\">";
}
