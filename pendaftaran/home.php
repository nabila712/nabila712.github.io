<html>
<head>
</head>
<body>
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Dashboard
          </li>
          <li class="breadcrumb-item active"></li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                include "../config/koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * from pendaftaran");
                $jum = mysqli_num_rows($query);

                ?>
                <div class="mr-5">Pendaftar Online = <?php echo"$jum"; ?></div>
              </div>
              
            </div>
          </div>
        </div>
</body>
</html>