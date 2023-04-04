<html>

<head>

</head>

<body>
    <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
            Dashboard
        </li>
        <li class="breadcrumb-item active">Tempat Tidur</li>
    </ol> -->
    <p>
        <font size="4"><a href="index1.php?Page=TambahTT" class="btn btn-success">+ Tambah</a></font>
    </p>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-bed"></i>
            Data Tempat Tidur</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Ruang</th>
                            <th>Kapasitas</th>
                            <th>Tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        include "../config/koneksi.php";
                        include "../config/tanggal.php";
                        $sql = mysqli_query($koneksi, "SELECT ka.*,ke.* FROM kamar ka INNER JOIN kelas ke ON ka.id_kls=ke.id_kls");
                        while ($r = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?php echo "$no"; ?>
                                </td>
                                <td align="center">
                                    <font size="2">
                                        <a class="btn btn-success btn-circle" href="index1.php?Page=EditTT&id_kamar=<?php echo "$r[id_kamar]"; ?>"><i class="fas fa-edit"></i></a>
                                    </font>

                                    <font size="2">
                                        <a class="btn btn-danger btn-circle" href="index1.php?Page=HapusTT&id_kamar=<?php echo "$r[id_kamar]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"></i></a>
                                    </font>
                                </td>
                                <td><?php echo "$r[nm_ruang] ($r[nm_kls])"; ?>
                                </td>
                                <td><?php echo "$r[kapasitas]"; ?>
                                </td>
                                <td><?php echo "$r[tersedia]"; ?></td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>