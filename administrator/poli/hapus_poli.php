<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM poli WHERE id_poli='$_GET[id_poli]'");
echo "<script>alert('Data Poli Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Poli\">";
?>