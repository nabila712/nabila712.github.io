<?php
include "../../config/koneksi.php";
include "../../config/library.php";

//$id_kaos = $_POST['id_kaos'];
$nama= $_POST['nama'];
$ket=$_POST['ket'];
$lokasi_file=($_FILES['foto']['tmp_name']);
$nama_file=($_FILES['foto']['name']);

		//resize foto
		//identitas file asli
		$im_src = imagecreatefromjpeg($lokasi_file);
		list($src_width,$src_height)=getimagesize($lokasi_file);
		
		//set ukuran gambar hasil perubahan
		$dst_width = 800;
		$dst_height = 896;
		
		//proses perubahan ukuran
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		
		//Simpan gambar
		$filename = "../foto_pelayanan/small_". $nama_file;

		imagejpeg($im,$filename,100);
		
		imagedestroy($im_src);
		imagedestroy($im);
		
	//Simpan data dan gambar sebenarnya
	move_uploaded_file($lokasi_file,"../foto_pelayanan/$nama_file");
		
	mysqli_query($koneksi,"INSERT INTO pelayanan(id_pelayanan,nama_pelayanan,foto,ket)VALUES('','$nama','$nama_file','$ket')");
		echo "<script>alert('Data Pelayanan Telah Tersimpan');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;
		url=../index1.php?Page=Pelayanan\">";
?>