<?php
include "../config/koneksi.php";
mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar='$_GET[id_kamar]'");
echo "<script>alert('Data Kamar Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=TT\">";
