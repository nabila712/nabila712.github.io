<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM fasilitas WHERE id_fas='$_GET[id_fasilitas]'");
echo "<script>alert('Data Fasilitas Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Fasilitas\">";
?>