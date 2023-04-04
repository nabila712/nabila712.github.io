<html>

<head>
    <script language="javascript" src="../js/validasi.js"></script>
    <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <script src="js/jquery-1.8.3.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="../javascript/validasi.js"></script>

    <script>
        $(function() {
            $("#tanggal").datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
</head>

<body>
    <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
            Dashboard
        </li>
        <li class="breadcrumb-item active">Tambah Tempat Tidur</li>
    </ol> -->
    <?php
    include "../config/koneksi.php";
    // $today = date("dmY");
    // $query = "select max(id_kaos) as last from kaos";
    // $query2 = "select id_kaos from kaos";

    // $hasil = mysql_query($query);
    // $data = mysql_fetch_array($hasil);
    // $lastno = $data['last'];

    // $hasil2 = mysql_query($query2);

    // if (mysql_num_rows($hasil2)>0)
    // {
    // $lastnourut = substr($lastno,2,3);
    // $nextnourut = $lastnourut + 1;
    // $nextnoform = sprintf('O-%03s',$nextnourut);
    // }else{
    // $nextnoform = sprintf('O-%03s',1);
    // }
    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-bed"></i>
            Tambah Data Tempat Tidur</div>
        <div class="card-body">
            <div class="table-responsive">
                <form role="form" method="post" action="TT/proses_tambah.php" name="forminputTT" id="forminputTT" enctype="multipart/form-data">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">

                            <label>Ruang</label>

                            <select name="kelas" id="kelas" class="form-control">
                                <option value="0" selected>- Pilih Ruang -</option>
                                <?php
                                $sql = mysqli_query($koneksi, "select * from kelas");
                                while ($r = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo "$r[id_kls]" ?>"><?php echo "$r[nm_kls]" ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">

                            <label>Nama Ruang</label>
                            <input type="text" name="nama" id="nama" size="50" class="form-control" placeholder="Masukkan Nama Ruang" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Kapasitas</label></td>
                            <input type="number" name="kapasitas" id="kapasitas" class="form-control" placeholder="Jumlah Kapasitas Ruang" />
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Tersedia</label></td>
                            <input type="number" name="tersedia" id="tersedia" size="50" class="form-control" placeholder="Jumlah Ruang Tersedia" />
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <input type="submit" name="proses" value="Simpan" class="btn btn-success">&nbsp;
                            <input type="reset" name="reset" value="Reset" class="btn btn-info">
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>