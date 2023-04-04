<?php
include "config/koneksi.php";

$no_pendaftaran = htmlspecialchars($_POST['hno'], ENT_QUOTES, 'utf8');

$tgl_daftar = htmlspecialchars($_POST['htgl'], ENT_QUOTES, 'utf8');
$jam_daftar = htmlspecialchars($_POST['hjam'], ENT_QUOTES, 'utf8');

$status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'utf8');
$no_rm = htmlspecialchars($_POST['no_rm'], ENT_QUOTES, 'utf8');

$nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'utf8');
$alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES, 'utf8');
$tgllhr = htmlspecialchars($_POST['tgllhr'], ENT_QUOTES, 'utf8');

$jadwal = htmlspecialchars($_POST['jadwal'], ENT_QUOTES, 'utf8');
$no_hp = htmlspecialchars($_POST['no_hp'], ENT_QUOTES, 'utf8');
$bayar = htmlspecialchars($_POST['bayar'], ENT_QUOTES, 'utf8');
$ket = htmlspecialchars($_POST['ket'], ENT_QUOTES, 'utf8');

date_default_timezone_set("Asia/Jakarta");
$today = date("Y-m-d");

$skl = mysqli_query($koneksi, "select * from pendaftaran where tgl_daftar='$today' AND id_jadwal='2'");
$jumlah = mysqli_num_rows($skl);

$skl2 = mysqli_query($koneksi, "select no_pendaftaran from pendaftaran where no_pendaftaran='$no_pendaftaran'");
$jumlah2 = mysqli_num_rows($skl2);

if ($jumlah2 > 0) {
	echo "<script>alert('Maaf Sebelumnya, No Pendaftaran Sudah Digunakan, Silahkan Ke Halaman Pendaftaran Online Kembali');</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;
	url=index.php?Page=DaftarOnline\">";
} else {
	if ($jadwal == '2' and $jumlah > 14) {
		echo "<script>alert('Maaf Sebelumnya, Kuota Pasien Pendaftaran Online Untuk Poli Dr Susanti Sp.OG Sudah Penuh');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=index.php?Page=DaftarOnline\">";
	} else if ($jadwal == '10') {
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=index.php?Page=DaftarOnline\">";
	} else {
		if ($status == 'lama') {
			mysqli_query($koneksi, "INSERT INTO pendaftaran(no_pendaftaran,tgl_daftar,jam_daftar,status,no_rm,nama_pas,id_jadwal,no_hp,bayar,ket)VALUES('$no_pendaftaran','$tgl_daftar','$jam_daftar','$status','$no_rm','$nama','$jadwal','$no_hp','$bayar','$ket')");
		} elseif ($status == 'baru') {
			mysqli_query($koneksi, "INSERT INTO pendaftaran(no_pendaftaran,tgl_daftar,jam_daftar,status,nama_pas,alamat,tgllhr,id_jadwal,no_hp,bayar,ket)VALUES('$no_pendaftaran','$tgl_daftar','$jam_daftar','$status','$nama','$alamat','$tgllhr','$jadwal','$no_hp','$bayar','$ket')");
		}
		echo "<script>alert('Proses Input Data Pendaftaran Online Berhasil');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
	url=DaftarOnlineALHasanah.php?no_pendaftaran=$no_pendaftaran&tgl=$tgl_daftar&jam=$jam_daftar\">";
	}
}
