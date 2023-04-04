<link rel="stylesheet" type="text/css" href="css/styletabel.css">
<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Jadwal Praktek Dokter</h1>
          <span class="color-text-a">
            <p align="justify">
              <font color="red"><b>NB : *Jadwal dapat berubah Sewaktu-waktu, Silahkan Hubungi Bagian Informasi Atau Telpon Ke No Tertera</b></font>
            </p>
            <table>
              <thead>
                <tr>
                  <th>Poli</th>
                  <th>Nama Dokter</th>
                  <th>Jadwal</th>
                </tr>
              </thead>
              <?php
              $sql = mysqli_query($koneksi, "SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal");
              while ($r = mysqli_fetch_array($sql)) {
              ?>
                <?php echo "<td>$r[nama_poli]</td><td>$r[nama_dok]</td><td>$r[hari], $r[waktu] WIB</td></tr>" ?>
              <?php
              }
              ?>

            </table>
          </span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Jadwal Praktek Dokter
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->