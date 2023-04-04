<html>
<head>

</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Pelayanan</li>
</ol>
<p><font size="4"><a href="index1.php?Page=TambahPelayanan" class="btn btn-success">+ Tambah</a></font></p>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pelayanan</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Nama Pelayanan</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
		include "../config/tanggal.php";
		$sql = mysqli_query($koneksi,"SELECT * FROM pelayanan");
		while($r = mysqli_fetch_array($sql))
		{
	?>
    	<tr>
        	<td><?php echo "$no"; ?></font></td>
            <td><?php echo "$r[nama_pelayanan]"; ?></font></td>
            <td><img src="foto_pelayanan/<?php echo "$r[foto]"; ?>" width="100" height="100"></td>
            <td><?php echo "$r[ket]"; ?></td>
            <td align="center"><font size="2">
            <a class="btn btn-success btn-circle" href="index1.php?Page=EditPelayanan&id_pelayanan=<?php echo "$r[id_pelayanan]"; ?>"><i class="fas fa-check"> Edit</i></a> 
			<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusPelayanan&id_pelayanan=<?php echo "$r[id_pelayanan]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
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