<?php
$Page = (isset($_GET['Page']))? $_GET['Page'] : "main";
switch ($Page) 
{
	case 'Home' : include "home.php"; break;

	case 'DaftarFasilitas' : include "daftar_fasilitas.php"; break;
	case 'DaftarPelayanan' : include "daftar_pelayanan.php"; break;

	case 'DetailArtikel' : include "detail_artikel.php"; break;
	case 'DetailFasilitas' : include "detail_fasilitas.php"; break;
	case 'DetailPelayanan' : include "detail_pelayanan.php"; break;
	
	case 'DaftarOnline' : include "daftar_online.php"; break;
	case 'StrukturOrganisasi' : include "struktur.php"; break;
	case 'Tentang' : include "tentang.php"; break;
	case 'Latar' : include "latarbelakang.php"; break;
	case 'VisiMisi' : include "visimisi.php"; break;
	case 'Kandungan' : include "kandungan.php"; break;
	case 'Anak' : include "anak.php"; break;
	case 'Anastesi' : include "anastesi.php"; break;
	case 'Umum' : include "umum.php"; break;
	case 'JadwalDokter' : include "jadwaldok.php"; break;
	case 'Unggulan' : include "unggulan.php"; break;

	default : include 'home.php';
}
?>