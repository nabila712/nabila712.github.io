<?php
  
include "konten.php";
?>

<?php
              $sqlmnpel = mysqli_query($koneksi, "SELECT * FROM pelayanan");
              while ($r = mysqli_fetch_array($sqlmnpel)) {
              ?>
                <a class="dropdown-item" href="index.php?Page=DetailPelayanan&nm=<?php echo "$r[nama_pelayanan]"; ?>"><?php echo "$r[nama_pelayanan]"; ?></a>
              <?php
              }
              ?>