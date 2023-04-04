<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$kelas = $_POST['kelas'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];
$tersedia = $_POST['tersedia'];

mysqli_query($koneksi, "INSERT INTO kamar VALUES('','$kelas','$nama','$kapasitas','$tersedia')");
echo "<script>alert('Data Tempat Tidur Telah Tersimpan');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=TT\">";
