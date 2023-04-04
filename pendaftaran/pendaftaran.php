<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="3600" />

<!-- DatePicker-->
<link rel="stylesheet" href="assets/css/datepicker.css">
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>

<script>
function playSound(filename){
  var mp3Source = '<source src="' + 1 + '.mp3" type="audio/mpeg">';
  var oggSource = '<source src="' + filename + '.ogg" type="audio/ogg">';
  var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';
  document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
}

</script>
<script>
    $(function(){
        $("#tgl1").datepicker({
        format:'yyyy-mm-dd'
        });
    });
</script>

</head>
<body onload="playSound('bing');">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
    Home
    </li>
    <li class="breadcrumb-item active">Pendaftaran Online</li>
</ol>

<ol class="breadcrumb">
    <form method="post" action="">
    <div class="col-xs-1">
	<label>&nbsp;Tanggal</label>
    </div>
    &nbsp;
    <div class="col-xs-4">
	<input type="date" name="tgl_awal" class="form-control"/>
    </div>


    <div class="col-xs-1">
	<label>Dokter</label>
    </div>

    <div class="col-xs-3">
	<select name="dok" id="dok" class="form-control" required>
		<option value=" " selected>- Pilih Dokter -</option>
		<?php
        include "../config/koneksi.php";
        $sql = mysqli_query($koneksi,"SELECT * FROM dokter");
            while($r = mysqli_fetch_array($sql))
            {
            ?>
                <option value="<?php echo "$r[id_dokter]" ?>"><?php echo "$r[nama_dok]" ?></option>
            <?php
            }
            ?>
	</select>
    </div>
   
    <input type="submit" Value="Tampilkan" name="Cetak" class="btn btn-primary">
    </form>
</ol>
<!--awal tabel-->
<!--Jika klik submit-->
<?php
if (isset($_POST['dok'])) {
?>
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
                <th>Tanggal & Jam Daftar</th>
                <th>Status Pasien</th>
                <th>Nama Pasien (No RM)Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jadwal Dokter</th>
                <th>No HP</th>
                <th>Pembayaran & Ket</th>
                <!--<th>Action</th>-->
            </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
        include "../config/tanggal.php";
        $dok=$_POST['dok'];
        $tgl_awal=$_POST['tgl_awal'];
        
        if ($dok<>0 AND $tgl_awal<>"") {
            $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.*,substr(po.no_pendaftaran,11,4) AS nourut FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE r.id_dokter='$dok' AND tgl_daftar='$tgl_awal' ORDER BY tgl_daftar DESC, jam_daftar DESC LIMIT 750");
        }elseif($dok<>0){
            $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.*,substr(po.no_pendaftaran,11,4) AS nourut FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE r.id_dokter='$dok' ORDER BY tgl_daftar DESC, jam_daftar DESC LIMIT 750");
        }elseif($tgl_awal<>""){
            $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.*,substr(po.no_pendaftaran,11,4) AS nourut FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE tgl_daftar='$tgl_awal' ORDER BY tgl_daftar DESC, jam_daftar DESC LIMIT 750");
        }else{
            $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.*,substr(po.no_pendaftaran,11,4) AS nourut FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal ORDER BY tgl_daftar DESC, jam_daftar DESC LIMIT 750");
        }
        
		while($r = mysqli_fetch_array($sql))
		{
            $tgl_daftar = TanggalIndo($r[tgl_daftar]);
            
	?>
    	<tr>
        	<td><?php echo "$no"; ?></td>
            <td><?php echo "$r[no_pendaftaran]"; ?></td>
            <td><?php echo "$tgl_daftar ($r[jam_daftar])"; ?></td>
            <td>
                <?php 
                    echo "$r[status]<br>"; 
                    if ($r[cek]==0){
                    echo "<div id='sound'></div>";
                    ?>
                        <span class='label label-danger'>Baru Mendaftar</span>
                    <?php
                    }else{
                    ?>
                        <span class='label label-info'>Sudah Dilihat</span>
                    <?php
                    }
                ?>
            </td>
            <td><?php echo "$r[nama_pas] ($r[no_rm])"; ?></td>
            <td><?php echo "$r[alamat]"; ?></td>
            <td><?php echo "$r[nama_dok]"; ?></td>
            <td><?php echo "$r[no_hp]"; ?></td>
            <td><?php echo "Pembayaran = <b>$r[bayar]</b><br>Ket = <b>$r[ket]</b>"; ?></td>
            <!--<td align="center"><font size="2">
            <a class="btn btn-success btn-circle" href="index1.php?Page=EditPoli&id_poli=<?php echo "$r[id_relasi]"; ?>"><i class="fas fa-check"> Edit</i></a>-->
			<!--<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusRelasi&id_relasi=<?php echo "$r[id_relasi]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
            </font>
			</td>-->
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
<!--akhir tabel-->
<!--jika klik submit-->
<?php
}else{
?>
<!--awal tabel-->
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
                <th>Tanggal & Jam Daftar</th>
                <th>Status Pasien</th>
                <th>Nama Pasien (No RM)Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jadwal Dokter</th>
                <th>No HP</th>
                <th>Pembayaran & Ket</th>
                <!--<th>Action</th>-->
            </tr>
            </thead>
    <tbody>
    <?php
		$no = 1;
	 	include "../config/koneksi.php";
		include "../config/tanggal.php";
		
        $sql = mysqli_query($koneksi,"SELECT po.*,r.*,p.*,d.*,j.*,substr(po.no_pendaftaran,11,4) AS nourut FROM pendaftaran po iNNER JOIN relasi r ON po.id_jadwal=r.id_relasi INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal ORDER BY tgl_daftar DESC, jam_daftar DESC LIMIT 750");
		while($r = mysqli_fetch_array($sql))
		{
            $tgl_daftar = TanggalIndo($r[tgl_daftar]);
            
	?>
    	<tr>
        	<td><?php echo "$no"; ?></td>
            <td><?php echo "$r[no_pendaftaran]"; ?></td>
            <td><?php echo "$tgl_daftar ($r[jam_daftar])"; ?></td>
            <td>
                <?php 
                    echo "$r[status]<br>"; 
                    if ($r[cek]==0){
                    echo "<div id='sound'></div>";
                    ?>
                        <span class='label label-danger'>Baru Mendaftar</span>
                    <?php
                    }else{
                    ?>
                        <span class='label label-info'>Sudah Dilihat</span>
                    <?php
                    }
                ?>
            </td>
            <td><?php echo "$r[nama_pas] ($r[no_rm])"; ?></td>
            <td><?php echo "$r[alamat]"; ?></td>
            <td><?php echo "$r[nama_dok]"; ?></td>
            <td><?php echo "$r[no_hp]"; ?></td>
            <td><?php echo "Pembayaran = <b>$r[bayar]</b><br>Ket = <b>$r[ket]</b>"; ?></td>
            <!--<td align="center"><font size="2">
            <a class="btn btn-success btn-circle" href="index1.php?Page=EditPoli&id_poli=<?php echo "$r[id_relasi]"; ?>"><i class="fas fa-check"> Edit</i></a>-->
			<!--<a class="btn btn-danger btn-circle" href="index1.php?Page=HapusRelasi&id_relasi=<?php echo "$r[id_relasi]"; ?>" onClick="return confirm('Yakin Ingin Menghapus <?php echo "$nama"; ?>?')"><i class="fas fa-trash"> Hapus</i></a>
            </font>
			</td>-->
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
<!--akhir tabel-->
<?php
}
?>
</body>
</html>

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>