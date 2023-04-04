<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM dokter WHERE id_dokter='$_GET[id_dokter]'");
echo "<script>alert('Data Dokter Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Dokter\">";
?>