<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE no_pendaftaran='$_GET[no_pendaftaran]'");
echo "<script>alert('Data Pendaftaran Online Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Pendaftaran\">";
?>