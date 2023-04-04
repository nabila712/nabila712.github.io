<html>

<head>
</head>

<body>
  <!-- Breadcrumbs-->
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item">
      Home
    </li>
    <li class="breadcrumb-item active"></li>
  </ol> -->

  <!-- Icon Cards-->

  <div class="row">
    <?php
    include "../config/koneksi.php";
    include "../config/tanggal.php";
    $sql = mysqli_query($koneksi, "SELECT ka.*,ke.* FROM kamar ka INNER JOIN kelas ke ON ka.id_kls=ke.id_kls");
    while ($r = mysqli_fetch_array($sql)) {
      $per = ($r['kapasitas'] - $r['tersedia']) / $r['kapasitas'] * 100;
      $persen = number_format($per, 0);
    ?>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-bed"></i>
            </div>
            <div class="mr-5"> <b><?= $r['nm_kls'] ?></b></div>
            <div class="mr-5"> <b><?= $r['tersedia'] ?> Tersedia</b></div>
            <!-- <div class="mr-5"> <b><?= $persen ?> % Terisi</b></div> -->
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?= $persen ?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><strong>
                  <font color="#000">&nbsp;<?= $persen ?>%</font>
                </strong></div>
            </div>

          </div>
        </div>
      </div>
    <?php
    }
    ?>

  </div>
</body>

</html>