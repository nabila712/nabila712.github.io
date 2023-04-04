<html>

<head>
    <script language="javascript" src="../js/validasi.js"></script>
    <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <script src="js/jquery-1.8.3.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script>
        $(function() {
            $("#tanggal").datepicker({
                format: 'yyyy-mm-dd',
                changeMonth: true,
                changeYear: true,
                yearRange: "-50:+0",
                showOn: "button"
            });
        });
    </script>
</head>

<body>
    <?php
    include "../config/koneksi.php";
    $id_kamar = $_GET['id_kamar'];
    $query = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_fetch_array($sql);

    $id_kls = $hasil['id_kls'];
    $nm_ruang = $hasil['nm_ruang'];
    $kapasitas = $hasil['kapasitas'];
    $tersedia = $hasil['tersedia'];

    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-bed"></i>
            Edit Data Tempat Tidur</div>
        <div class="card-body">
            <div class="table-responsive">
                <form role="form" method="post" action="TT/proses_edit.php" name="formeditTT" id="formeditTT" enctype="multipart/form-data">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Ruang</label></td>

                            <select name="kelas" id="kelas" class="form-control">
                                <?php
                                $tampil = mysqli_query($koneksi, "SELECT * FROM kelas");
                                while ($data = mysqli_fetch_array($tampil)) {
                                    if ($id_kls == $data['id_kls']) {
                                        echo "<option value=$data[id_kls] selected>$data[nm_kls] </option>";
                                    } else {
                                        echo "<option value=$data[id_kls]>$data[nm_kls] </option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Nama Ruang</label></td>
                            <input type="text" name="nama" id="nama" size="50" class="form-control" value="<?= $nm_ruang ?>" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Kapasitas</label></td>
                            <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="<?= $kapasitas ?>" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Tersedia</label></td>
                            <input type="number" name="tersedia" id="tersedia" size="50" class="form-control" value="<?= $tersedia ?>" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <input type="submit" name="proses" value="Edit" class="btn btn-success">&nbsp;
                            <input type="reset" name="reset" value="Reset" class="btn btn-info">
                            <input type="hidden" name="hid" value="<?= $id_kamar ?>" class="btn btn-info">
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>