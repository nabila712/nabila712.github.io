<html>

<head>
</head>

<body>
	<?php
	include "config/koneksi.php";
	include "config/tanggal.php";

	date_default_timezone_set("Asia/Jakarta");
	$today = TanggalIndo(date("Y-m-d"));

	$no_pendaftaran = $_GET['no_pendaftaran'];
	$tgl = $_GET['tgl'];
	$jam = $_GET['jam'];

	$query = "SELECT * FROM pendaftaran WHERE no_pendaftaran='$no_pendaftaran' AND tgl_daftar='$tgl' AND jam_daftar='$jam' ";
	$sql = mysqli_query($koneksi, $query);
	$r = mysqli_fetch_array($sql);
	$no_pendaftaran = $r['no_pendaftaran'];
	$tgl_daftar = TanggalIndo($r['tgl_daftar']);
	$jam_daftar = $r['jam_daftar'];
	$status = $r['status'];
	$no_rm = $r['no_rm'];
	$nama_pas = $r['nama_pas'];
	$alamat = $r['alamat'];
	$tgllhr = TanggalIndo($r['tgllhr']);

	$id_jadwal = $r['id_jadwal'];
	$query2 = "SELECT r.*,d.* FROM relasi r INNER JOIN dokter d ON r.id_dokter=d.id_dokter WHERE id_relasi='$id_jadwal'";
	$sql2 = mysqli_query($koneksi, $query2);
	$r2 = mysqli_fetch_array($sql2);
	$nama_dok = $r2['nama_dok'];

	$no_hp = $r['no_hp'];
	$bayar = $r['bayar'];
	$ket = $r['ket'];
	?>
	<p align="center"><img src="img/logonotari.png"></p>

	<table width="100%" border="0" align="center">
		<tr>
			<td width="35%" align="center" colspan="5"><b>
					<font size="7px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$no_pendaftaran"; ?></font>
				</b></td>
		</tr>
		<tr>
			<td width="35%" align="center" colspan="5"></td>
		</tr>
		<tr>
			<td width="2%"></td>
			<td width="15%">
				<font size="3px" color="#008000"><b>Tanggal dan Jam Pendaftaran</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$tgl_daftar, $jam_daftar"; ?></font>
			</td>
		</tr>
		<tr>
			<td width="2%"></td>
			<td width="10%">
				<font size="3px" color="#008000"><b>Nama Pasien</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$nama_pas"; ?></font>
			</td>
		</tr>
		<?php
		if ($status == 'lama') {
		?>
			<tr>
				<td width="2%"></td>
				<td width="10%">
					<font size="3px" color="#008000"><b>No RM</b></font>
				</td>
				<td width="1%">:</td>
				<td width="35%">
					<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$no_rm"; ?></font>
				</td>
			</tr>
		<?php
		} else {
		?>
			<tr>
				<td width="2%"></td>
				<td width="10%">
					<font size="3px" color="#008000"><b>Alamat</b></font>
				</td>
				<td width="1%">:</td>
				<td width="35%">
					<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$alamat"; ?></font>
				</td>
			</tr>
			<tr>
				<td width="2%"></td>
				<td width="10%">
					<font size="3px" color="#008000"><b>Tanggal Lahir</b></font>
				</td>
				<td width="1%">:</td>
				<td width="35%">
					<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$tgllhr"; ?></font>
				</td>
			</tr>

		<?php
		}
		?>

		<tr>
			<td width="2%"></td>
			<td width="10%">
				<font size="3px" color="#008000"><b>Dokter</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<b>
					<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$nama_dok"; ?></font>
				</b>
			</td>
		</tr>
		<tr>
			<td width="2%"></td>
			<td width="10%">
				<font size="3px" color="#008000"><b>No HP</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$no_hp"; ?></font>
			</td>
		</tr>
		<tr>
			<td width="2%"></td>
			<td width="10%">
				<font size="3px" color="#008000"><b>Pembayaran</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<font size="3px" color="#008000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$bayar"; ?></font>
			</td>
		</tr>
		<tr>
			<td width="2%"></td>
			<td width="10%">
				<font size="3px" color="#008000"><b>Catatan</b></font>
			</td>
			<td width="1%">:</td>
			<td width="35%">
				<font size="3px" color="#008000" face="times new roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$ket"; ?></font>
			</td>
		</tr>
		<tr>
			<td align="right" colspan="5">
				<font size="3px" color="#008000" face="times new roman">Madiun, <?php echo "$today"; ?></font>
			</td>
		</tr>
		<tr>
			<td width="20%" colspan="5">
				<font size="4px" color="#dc3545" face="times new roman">NB : Pasien yang sudah melakukan daftar online dihimbau agar dapat datang 15 menit sebelum jam praktek dokter</font>
			</td>
		</tr>
	</table>
	<p align="center">
		<a href="buktidaftar.php?no_pendaftaran=<?php echo "$no_pendaftaran"; ?>&tgl=<?php echo "$tgl"; ?>&jam=<?php echo "$jam"; ?>"><button>Klik Disini Untuk Download</button></a>
		<a href="index.php?Page=DaftarOnline"><button>Klik Disini Untuk Kembali</button></a>
	</p>
</body>

</html>