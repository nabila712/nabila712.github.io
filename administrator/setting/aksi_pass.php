<?php
include "../../config/koneksi.php";

$pass_lama=base64_encode($_POST[pass_lama]);
$pass_baru=base64_encode($_POST[pass_baru]);

if(!empty($pass_lama) && !empty($pass_baru) && !empty($_POST[pass_ulangi]))
{
	$r=mysql_fetch_array(mysql_query("SELECT * FROM user where password='$pass_lama'"));

	if (empty($pass_lama) OR empty($pass_lama) OR empty($_POST[pass_ulangi]))
	{
		echo"<script>alert('Data Masih Kurang Lengkap');history.back()</script>";
	}
	
// Apabila password lama cocok dengan password di database
if ($pass_lama==$r[password])
{
  // Pastikan bahwa password baru yang dimasukkan sebanyak dua kali sudah cocok
  if ($_POST[pass_baru]==$_POST[pass_ulangi])
  {
	  mysql_query("UPDATE user SET password = '$pass_baru' where username='$r[username]'");
	  echo "<script>alert('Password Berhasil Diubah');</script>";
	  echo "<script>history.go(-1)</script>";
  }else{
		echo "<script>alert('Password Baru Dengan Ulangi Password Tidak Cocok');</script>";
		echo "<script>history.go(-1)</script>"; 
  }
}else{
	echo "<script>alert('Anda Salah Memasukkan Password Lama');</script>";
	echo "<script>history.go(-1)</script>"; 
}

}else{
echo"<script>alert('Data Belum Lengkap');history.back()</script>";
}
?>