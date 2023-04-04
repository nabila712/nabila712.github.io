<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$hari= $_POST['hari'];
$waktu= $_POST['waktu'];
		
	mysqli_query($koneksi,"INSERT INTO jadwal(id_jadwal,hari,waktu)VALUES('','$hari','$waktu')");
		echo "<script>alert('Data Jadwal Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=Jadwal\">";
?>