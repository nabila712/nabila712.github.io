<?php
session_start();
include "../config/koneksi.php";

$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'utf8');
$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf8');
$passwordhash = md5($password);
$op = $_GET['op'];
if ($op == "in") {
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$passwordhash'");
	if (mysqli_num_rows($query) == 1) {
		//jika berhasil akan bernilai 1
		$q = mysqli_fetch_array($query);
		$nama = $q['nama'];
		$_SESSION['username'] = $q['username'];
		if ($q['level'] == "admin") {
			echo "<script>alert('Anda Telah Berhasil Login, Selamat Datang $nama Sebagai ADMIN');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
				url=../administrator/index1.php?Page=Home\">";
		} elseif ($q['level'] == "pendaftaran") {
			echo "<script>alert('Anda Telah Berhasil Login, Selamat Datang $nama Sebagai PENDAFTARAN');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
				url=../pendaftaran/index1.php?Page=Home\">";
		} elseif ($q['level'] == "menejemen") {
			echo "<script>alert('Anda Telah Berhasil Login, Selamat Datang $nama Sebagai MENEJEMEN');</script>";
			echo "<meta http-equiv=\"refresh\" content=\"0;
				url=../menejemen/index1.php?Page=Home\">";
		}
	} else {
		echo "<script>alert('Maaf anda Kurang Beruntung 🙏');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../administrator/index.php\">";
	}
} else if ($op == "out") {
	unset($_SESSION['username']);
	//$queryhapus1 = mysql_query("DELETE FROM tmp_analisa WHERE id_member='$sesi'");
	echo "<script>alert('Anda Telah Berhasil Logout');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
url=../index.php\">";
}
