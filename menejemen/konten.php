<?php
$Page = (isset($_GET['Page'])) ? $_GET['Page'] : "main";
switch ($Page) {
	case 'Home':
		include "home.php";
		break;

	case 'TT':
		include "TT/TT.php";
		break;
	case 'TambahTT':
		include "TT/tambah_TT.php";
		break;
	case 'EditTT':
		include "TT/edit_TT.php";
		break;
	case 'HapusTT':
		include "TT/hapus_TT.php";
		break;

	default:
		include '404.html';
}
