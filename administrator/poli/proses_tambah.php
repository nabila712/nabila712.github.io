<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$nama= $_POST['nama'];
		
	mysqli_query($koneksi,"INSERT INTO poli(id_poli,nama_poli)VALUES('','$nama')");
		echo "<script>alert('Data Poli Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=Poli\">";
?>