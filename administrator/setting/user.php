<html>
<head>
	
</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Setting User</li>
</ol>
<p><font size="4"><a href="index1.php?Page=TambahUser" class="btn btn-success">+ Tambah</a></font></p>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data User</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Action</th>
                    </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
		$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE NOT level='admin'");
		while($r = mysqli_fetch_array($sql))
		{
			$id_user = $r['id_user'];
			$nama= $r['nama'];
            $username=$r['username'];
            $password=$r['password'];
            $level=$r['level'];
	?>
    	<tr>
        	<td><font size="2"><?php echo "$no"; ?></font></td>
            <td><font size="2"><?php echo "$nama"; ?></font></td>
            <td><font size="2"><?php echo "$username"; ?></font></td>
            <td><font size="2"><?php echo "$password"; ?></font></td>
            <td><font size="2"><?php echo "$level"; ?></font></td>
            <td><font size="2">
            <!--<a href="index1.php?Page=EditUser&nid=<?php echo "$id_user"; ?>">Edit</a> | -->
            <a class="btn btn-danger btn-circle" href="index1.php?Page=HapusUser&id_user=<?php echo "$id_user"; ?>" onClick="return confirm('Yakin Ingin Menghapus username : <?php echo "$username"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
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
<br>
</body>
</html>