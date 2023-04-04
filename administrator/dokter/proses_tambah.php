<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$nama= $_POST['nama'];
		
	mysqli_query($koneksi,"INSERT INTO dokter(id_dokter,nama_dok)VALUES('','$nama')");
		echo "<script>alert('Data Dokter Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=Dokter\">";
?>