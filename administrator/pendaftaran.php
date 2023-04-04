<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Pendaftaran Online</li>
</ol>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pendaftaran Online</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No</th>
                <th>No Pendaftaran</th>
                <th>Tanggal Daftar</th>
                <th>Status Pasien</th>
                <th>Nama Pasien(No RM)</th>
                <th>Alamat</th>
                <th>Jadwal Dokter</th>
                <th>No HP</th>
                <th>Cara Pembayaran</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
		include "../config/tanggal.php";
		
        $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.* FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal ORDER BY tgl_daftar DESC, jam_daftar DESC");
        
		while($r = mysqli_fetch_array($sql))
		{
            $tgl_daftar = TanggalIndo($r[tgl_daftar]);
	?>
    	<tr>
        	<td><?php echo "$no"; ?></font></td>
            <td><?php echo "$r[no_pendaftaran]"; ?></font></td>
            <td><?php echo "$tgl_daftar"; ?></font></td>
            <td><?php echo "$r[status]"; ?></font></td>
            <td><?php echo "$r[nama_pas]($r[no_rm])"; ?></font></td>
            <td><?php echo "$r[alamat]"; ?></font></td>
            <td><?php echo "$r[nama_dok]"; ?></font></td>
            <td><?php echo "$r[no_hp]"; ?></font></td>
            <td><?php echo "$r[bayar]"; ?></font></td>
            <td><?php echo "$r[ket]"; ?></font></td>
            <td align="center"><font size="2">
            <!--<a class="btn btn-success btn-circle" href="index1.php?Page=EditPoli&id_poli=<?php echo "$r[id_relasi]"; ?>"><i class="fas fa-check"> Edit</i></a>-->
			<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusDaftar&no_pendaftaran=<?php echo "$r[no_pendaftaran]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
            </font>
			</td>
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