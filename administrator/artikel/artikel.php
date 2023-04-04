<html>
<head>

</head>
<body>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Dashboard
    </li>
    <li class="breadcrumb-item active">Artikel</li>
</ol>
<p><font size="4"><a href="index1.php?Page=TambahArtikel" class="btn btn-success">+ Tambah</a></font></p>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Artikel</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Foto</th>
                  
                    <th>Action</th>
                </tr>
            </thead>
    <tbody>
    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
		$no = 1;
	 	include "../config/koneksi.php";
		include "../config/tanggal.php";
		$sql = mysqli_query($koneksi,"SELECT * FROM artikel");
		while($r = mysqli_fetch_array($sql))
		{
            $isi=limit_words($r[isi],5);
	?>
    	<tr>
        	<td><?php echo "$no"; ?></font></td>
            <td><?php echo "$r[judul]"; ?></font></td>
            <td><?php echo "$isi ..."; ?></font></td>
            <td><img src="foto_artikel/<?php echo "$r[foto]"; ?>" width="100" height="100"></td>
           
            <td align="center"><font size="2">
            <a class="btn btn-success btn-circle" href="index1.php?Page=EditArtikel&id_artikel=<?php echo "$r[id_artikel]"; ?>"><i class="fas fa-check"> Edit</i></a> 
			<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusArtikel&id_artikel=<?php echo "$r[id_artikel]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
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