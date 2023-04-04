<?php
include "../config/koneksi.php";
mysqli_query($koneksi,"DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_pelayanan]'");
echo "<script>alert('Data Pelayanan Telah Dihapus');</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;
url=index1.php?Page=Pelayanan\">";
?>