<html>
<head>

</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Jadwal Dokter Poli</li>
</ol>
<p><font size="4"><a href="index1.php?Page=TambahRelasi" class="btn btn-success">+ Tambah</a></font></p>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Jadwal Dokter Poli</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Poli</th>
                <th>Nama Dokter</th>
                <th>Nama Jadwal</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
		include "../config/tanggal.php";
		$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal");
		while($r = mysqli_fetch_array($sql))
		{
	?>
    	<tr>
        	<td><?php echo "$no"; ?></font></td>
            <td><?php echo "$r[nama_poli]"; ?></font></td>
            <td><?php echo "$r[nama_dok]"; ?></font></td>
            <td><?php echo "$r[hari], $r[waktu]"; ?></font></td>
            <td align="center"><font size="2">
            <!--<a class="btn btn-success btn-circle" href="index1.php?Page=EditPoli&id_poli=<?php echo "$r[id_relasi]"; ?>"><i class="fas fa-check"> Edit</i></a>-->
			<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusRelasi&id_relasi=<?php echo "$r[id_relasi]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
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