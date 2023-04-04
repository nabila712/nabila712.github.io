<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$poli= $_POST['poli'];
$dokter= $_POST['dokter'];
$jadwal= $_POST['jadwal'];
		
	mysqli_query($koneksi,"INSERT INTO relasi(id_poli,id_dokter,id_jadwal)VALUES('$poli','$dokter','$jadwal')");
		echo "<script>alert('Data Relasi Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=Relasi\">";
?>