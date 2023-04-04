<?php
include "../../config/koneksi.php";

$id_artikel = $_POST['hid_artikel'];
$nama= $_POST['judul'];
$ket=$_POST['isi'];


if(!empty($nama) && !empty($ket))
{
	
		$query = "UPDATE artikel SET judul='$nama', isi='$ket' WHERE id_artikel='$id_artikel'";
		$sql = mysqli_query ($koneksi,$query);
		if ($sql)
		{
			echo "<script>alert('Data Artikel Telah Dirubah');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index1.php?Page=Artikel\">";
		}else{
			echo "<script>alert('DATA ARTIKEL GAGAL DIRUBAH');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index1.php?Page=Artikel\">";
		}
	
}else{ 
	echo "<script>alert('Data Artikel Belum Lengkap');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
	url=../index1.php?Page=Artikel\">";
}
?>