<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail Pelayanan RSIA Al Hasanah Madiun</title>
</head>
<body>
  <!--/ Intro Single star /-->
  <!-- <section class="intro-single"> -->
   <!--  <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Agents</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Margaret Stone
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div> -->
  <!-- </section> -->
  <!--/ Intro Single End /-->
  <br><br><br><br><br><br><br>
<?php
  include "config/koneksi.php";
  $nama_pel = $_GET['nm'];
  $sqlpel = mysqli_query($koneksi,"SELECT * FROM pelayanan WHERE nama_pelayanan='$nama_pel'");
  $datapel = mysqli_fetch_array($sqlpel);
?>
  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="administrator/foto_pelayanan/small_<?php echo "$datapel[foto]";?>" alt="<?php echo "$datapel[nama_pelayanan]";?>" class="agent-avatar img-fluid">
              </div>
            </div>
            
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d"><?php echo "$datapel[nama_pelayanan]";?></h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    <?php echo "$datapel[ket]";?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->
</body>
</html>
