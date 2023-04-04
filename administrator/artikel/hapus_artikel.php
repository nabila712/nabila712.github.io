<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel='$_GET[id_artikel]'");
echo "<script>alert('Data Artikel Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Artikel\">";
?>