<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM relasi WHERE id_relasi='$_GET[id_relasi]'");
echo "<script>alert('Data Relasi Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Relasi\">";
?>