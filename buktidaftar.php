<?php
//require_once("lib/fpdf/fpdf.php"); 
require('lib/fpdf/fpdf.php');
require('config/koneksi.php');
require('config/tanggal.php');
date_default_timezone_set("Asia/Jakarta");
$waktu = date("H:i:s");
$today = TanggalIndo(date("Y-m-d"));

$no_pendaftaran = $_GET['no_pendaftaran'];
$tgl = $_GET['tgl'];
$jam = $_GET['jam'];

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE no_pendaftaran='$no_pendaftaran' AND tgl_daftar='$tgl' AND jam_daftar='$jam'");

$row = mysqli_fetch_array($query);
$no_pendaftaran = $row['no_pendaftaran'];
$tgl_daftar = TanggalIndo($row['tgl_daftar']);
$jam_daftar = $row['jam_daftar'];
$status = $row['status'];
$no_rm = $row['no_rm'];
$nama_pas = $row['nama_pas'];
$alamat = $row['alamat'];
$tgllhr = TanggalIndo($row['tgllhr']);
$id_jadwal = $row['id_jadwal'];

$query2 = "SELECT r.*,d.* FROM relasi r INNER JOIN dokter d ON r.id_dokter=d.id_dokter WHERE id_relasi='$id_jadwal'";
$sql2 = mysqli_query($koneksi, $query2);
$r2 = mysqli_fetch_array($sql2);
$nama_dok = $r2['nama_dok'];

$no_hp = $row['no_hp'];
$bayar = $row['bayar'];

// Setting halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
// Setting jenis font
$pdf->SetFont('Arial', '', 14);
// Setting spasi kebawah supaya tidak rapat
$pdf->AddPage();

//kop
$pdf->Image('img/logonotari.png', 17);
$pdf->Cell(0, 20, 'Bukti Pendaftaran Pasien Online', 0, 1, 'C');
$pdf->SetLineWidth(0.4);
$pdf->Rect(60, 40, 90, 13);/*ubah ukuran Kotak Judul -> Rect(sumbu x, sumbu y, lebar kotak,tinggi kotak)*/
$pdf->SetFont('Arial', 'B', 12);
if ($status == 'baru') {
	$pdf->Cell(0, 12, $no_pendaftaran, 0, 1, 'C');
	$pdf->SetFont('Arial', '', 12);
	$pdf->Cell(50, 13, 'Tanggal & Jam Daftar', 0, 0, 'L');
	$pdf->Cell(50, 13, $tgl_daftar, 0, 1);
	$pdf->Cell(50, 14, 'Nama Pasien', 0, 0, 'L');
	$pdf->Cell(50, 14, $nama_pas, 0, 1);
	$pdf->Cell(50, 15, 'Alamat', 0, 0, 'L');
	$pdf->Cell(50, 15, $alamat, 0, 1);
	$pdf->Cell(50, 16, 'Tanggal Lahir', 0, 0, 'L');
	$pdf->Cell(50, 16, $tgllhr, 0, 1);
	$pdf->Cell(50, 17, 'No HP', 0, 0, 'L');
	$pdf->Cell(50, 17, $no_hp, 0, 1);
	$pdf->Cell(50, 18, 'Dokter', 0, 0, 'L');
	$pdf->Cell(50, 18, $nama_dok, 0, 1);
	$pdf->Cell(50, 19, 'Pembayaran', 0, 0, 'L');
	$pdf->Cell(50, 19, $bayar, 0, 1);
	$pdf->Cell(150, 20, 'Madiun,', 0, 0, 'R');
	$pdf->Cell(150, 20, $today, 0, 1);

	$pdf->SetFont('Arial', 'I', 11);
	$pdf->Cell(0, 21, 'NB : Pasien yang sudah melakukan daftar online dihimbau agar datang 15 menit sebelum jam praktek dokter', 0, 0, 'L');
} else {
	$pdf->Cell(50, 10, 'No Pendaftaran', 0, 0, 'L');
	$pdf->Cell(50, 10, $no_pendaftaran, 0, 1);
	$pdf->Cell(50, 11, 'Tanggal & Jam Daftar', 0, 0, 'L');
	$pdf->Cell(50, 11, $tgl_daftar, 0, 1);
	$pdf->Cell(50, 12, 'No RM', 0, 0, 'L');
	$pdf->Cell(50, 12, $no_rm, 0, 1);
	$pdf->Cell(50, 13, 'Nama Pasien', 0, 0, 'L');
	$pdf->Cell(50, 13, $nama_pas, 0, 1);
	$pdf->Cell(50, 14, 'Pembayaran', 0, 0, 'L');
	$pdf->Cell(50, 14, $bayar, 0, 1);
	$pdf->Cell(150, 15, 'Madiun,', 0, 0, 'R');
	$pdf->Cell(150, 15, $today, 0, 1);

	$pdf->SetFont('Arial', 'I', 11);
	$pdf->Cell(0, 17, 'NB : Pasien yang sudah melakukan daftar online dihimbau agar datang 15 menit sebelum jam praktek dokter', 0, 0, 'L');
}

$pdf->Output();
