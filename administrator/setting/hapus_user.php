<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$_GET[id_user]'");
echo "<script>alert('Data User Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=User\">";
?>