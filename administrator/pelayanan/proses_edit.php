<?php
include "../../config/koneksi.php";

$id_kaos = $_POST['hid_kaos'];
$nama= $_POST['nama'];
$hargab = $_POST['harga_beli'];
$hargaj = $_POST['harga_jual'];
$diskon = $_POST['diskon'];
$stok= $_POST['stok'];
$desk=$_POST['desk'];


if(!empty($nama) && !empty($hargab) && !empty($hargaj))
{
	
		$query = "UPDATE kaos SET nama_kaos='$nama', harga_beli='$hargab', harga_jual='$hargaj', diskon='$diskon', stok='$stok', desk='$desk' WHERE id_kaos='$id_kaos'";
		$sql = mysql_query ($query);
		if ($sql)
		{
			echo "<script>alert('Data Kaos Telah Dirubah');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index.php?Page=Kaos\">";
		}else{
			echo "<script>alert('DATA KAOS GAGAL DIRUBAH');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
			url=../index.php?Page=Kaos\">";
		}
	
}else{ 
	echo "<script>alert('Data Kaos Belum Lengkap');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
	url=../index.php?Page=Kaos\">";
}
?>