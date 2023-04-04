<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM jadwal WHERE id_jadwal='$_GET[id_jadwal]'");
echo "<script>alert('Data Jadwal Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Jadwal\">";
?>