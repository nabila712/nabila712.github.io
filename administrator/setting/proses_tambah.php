<?php
include "../../config/koneksi.php";
include "../../config/library.php";

$nama=$_POST['nama'];
$username=$_POST['username'];
$pass=$_POST['password'];
$passwordhash=md5($pass);
$level=$_POST['level'];

if(!empty($username) && !empty($passwordhash))
{
	//Simpan data
	mysqli_query($koneksi,"INSERT INTO user(id_user,nama,username,password,level) VALUES('','$nama','$username','$passwordhash','$level')");
		echo "<script>alert('Data User Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=User\">";

}else{
	echo "<script>alert('Data User Belum Lengkap');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
	url=../index1.php?Page=TambahUser\">";
}
?>