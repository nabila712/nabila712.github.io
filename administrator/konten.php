<?php
$Page = (isset($_GET['Page']))? $_GET['Page'] : "main";
switch ($Page) 
{
	case 'Home' : include "home.php"; break;

	case 'Fasilitas' : include "fas/fasilitas.php"; break;
	case 'TambahFasilitas' : include "fas/tambah_fasilitas.php"; break;
	case 'EditFasilitas' : include "fas/edit_fasilitas.php"; break;
	case 'HapusFasilitas' : include "fas/hapus_fasilitas.php"; break;
	
	case 'Pelayanan' : include "pelayanan/pelayanan.php"; break;
	case 'TambahPelayanan' : include "pelayanan/tambah_pelayanan.php"; break;
	case 'EditPelayanan' : include "pelayanan/edit_pelayanan.php"; break;
	case 'HapusPelayanan' : include "pelayanan/hapus_pelayanan.php"; break;

	case 'Artikel' : include "artikel/artikel.php"; break;
	case 'TambahArtikel' : include "artikel/tambah_artikel.php"; break;
	case 'EditArtikel' : include "artikel/edit_artikel.php"; break;
	case 'HapusArtikel' : include "artikel/hapus_artikel.php"; break;
	
	case 'Dokter' : include "dokter/dokter.php"; break;
	case 'TambahDokter' : include "dokter/tambah_dokter.php"; break;
	case 'HapusDokter' : include "dokter/hapus_dokter.php"; break;

	case 'Poli' : include "poli/poli.php"; break;
	case 'TambahPoli' : include "poli/tambah_poli.php"; break;
	case 'HapusPoli' : include "poli/hapus_poli.php"; break;

	case 'Jadwal' : include "jadwal/jadwal.php"; break;
	case 'TambahJadwal' : include "jadwal/tambah_jadwal.php"; break;
	case 'HapusJadwal' : include "jadwal/hapus_jadwal.php"; break;

	case 'Relasi' : include "relasi/relasi.php"; break;
	case 'TambahRelasi' : include "relasi/tambah_relasi.php"; break;
	case 'HapusRelasi' : include "relasi/hapus_relasi.php"; break;

	case 'User' : include "setting/user.php"; break;
	case 'TambahUser' : include "setting/tambah_user.php"; break;
	case 'HapusUser' : include "setting/hapus_user.php"; break;
	//case 'ChangePass' : include "setting/ganti_pass.php"; break;

	case 'Pendaftaran' : include "pendaftaran.php"; break;
	case 'HapusDaftar' : include "hapus_pendaftaran.php"; break;
	default : include '404.html';
}
?>