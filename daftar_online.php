<html>

<head>
    <script language="javascript" src="../js/validasi.js"></script>
    <script src="../javascript/validasi.js"></script>
    <script>
        $(function() {
            $("#tanggal").datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#status').change(function() {
                if ($(this).val() == 'baru') {
                    $('#tno_rm').css('display', 'none');
                    // $('#tnama').css('display', '');
                    $('#talamat').css('display', '');
                    $('#ttgllhr').css('display', '');
                } else {
                    $('#tno_rm').css('display', '');
                    // $('#tnama').css('display', 'none');
                    $('#talamat').css('display', 'none');
                    $('#ttgllhr').css('display', 'none');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#forminputdaftar').bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    jadwal: {
                        validators: {
                            notEmpty: {
                                message: 'Pilih Jadwal Dahulu??'
                            }
                        }
                    },
                    bayar: {
                        validators: {
                            notEmpty: {
                                message: 'Pilih Pembayaran??'
                            }
                        }
                    },
                    no_hp: {
                        validators: {
                            notEmpty: {
                                message: 'No Telepon/HP??'
                            }
                        }
                    },
                    nama: {
                        validators: {
                            notEmpty: {
                                message: 'Nama Pasien??'
                            }
                        }
                    },
                    alamat: {
                        validators: {
                            notEmpty: {
                                message: 'Alamat??'
                            }
                        }
                    },
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#memberModal').modal('show');
        });
    </script>

</head>

<body>
    <!-- Modal Popup -->
    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="memberModalLabel"> Informasi Pelayanan Poli</h4>
                </div>
                <div class="modal-body">
                    <p>1. Pendaftaran online akan <b>
                            <font color="red">tutup 1 jam</font>
                        </b> sebelum dimulai pelayanan</p>
                    <!--<p>2. <b>
                            <font color="red">Untuk pelayanan poli Dr Susanti Mintarsih,Sp.OG</font>
                        </b> sementara <b>
                            <font color="red">tidak menerima pendaftaran online</font></p>-->
                    <p>2. Untuk menghindari penyebaran covid 19 harap tidak datang ke
                        <b>
                            <font color="red">RSIA Al Hasanah Madiun</font>
                        </b> apabila tidak emergency
                    </p>
                    <p>3. Setelah melakukan pendaftaran online ini, silahkan melakukan <b>
                            <font color="red">registrasi ulang kembali 15 menit sebelum jam praktek dokter</font>
                        </b> dengan langsung datang ke bagian informasi untuk konfirmasi. Lalu <b>
                            <font color="red">apabila belum registrasi ulang sebelum jam praktek</font>
                        </b>
                        maka <b>
                            <font color="red">antrian sesuai kedatangan.</font>
                        </b></p>
                    <p>4. Untuk Pelayanan <b>
                            <font color="red">Poli kandungan dan anak(periksa sakit)</font>
                        </b><b>
                            <font color="red"> Wajib </font>
                        </b>
                        membawa <b>
                            <font color="red">Hasil Rapid Test Antigen </font>
                        </b></p>
                        <!--
                        <p>5. Untuk Pelayanan <b><font color="red">Poli Dr Tauhid Islamy Sp. OG</font></b> Tanggal <b><font color="red">8 Maret 2023 Tidak Praktek</font></b></p>
                        <p>5. Untuk Pelayanan <b><font color="red">Poli Dr Susanti Mintarsih Sp. OG </font></b> <b><font color="red"> Tanggal 23 Februari 2023 Tidak Praktek</font></b></p>
                        <p>5. Untuk Pelayanan <b><font color="red">Poli Dr Diah Rahmi Kunarti Sp. A </font></b> Tanggal <b><font color="red">23 Januari 2023 Tidak Praktek</font></b></p>
                 
                        <p>5. Untuk Pelayanan <b><font color="red">Poli Dr Bagus Mukti Wibowo Sp. OG Tanggal </font></b> <b><font color="red"> 21 Januari 2023 Tidak Praktek</font></b></p>
                        <p>5. Untuk Pelayanan <b><font color="red">Poli Dr Melita Widyastuti Sp. A, M. Kes </font></b> Tanggal <b><font color="red">18 Januari 2023 Tidak Praktek</font></b></p>
                        
                        
                        
                        <p>5. Selama Puasa <b><font color="red">Imunisasi</font></b> Dimulai<b><font color="red"> Jam 15.00 - 16.00 WIB</font></b></p>
                        
                        <p>6. Praktek <b>Dr Tauhid Islamy Sp. OG <font color="red">Sabtu, 22 Agustus 2020 Jam 07.00</font> DIALIHKAN <font color="red">Minggu 23 Agustus 2020 Jam 07.00</font></b></p>
                    
                        <p>6. Untuk Pelayanan <b><font color="red">Poli Dr Susanti Mintarsih Sp. OG </font></b> <b><font color="red"> Tanggal 7 April 2022 Dipindah Sabtu,9 April 2022 Jam 14.00 WIB</font></b></p>-->

                    <p>NB : UNTUK MENGETAHUI INFORMASI JADWAL DAN KETERSEDIAAN PELAYANAN POLI SETIAP DOKTER,SILAHKAN MENGHUBUNGI DI <br><b>
                            <font color="red">0351463173/085100705075 (Via Whatsapp)</font>
                        </b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

    <?php
    include "config/koneksi.php";
    date_default_timezone_set("Asia/Jakarta");
    $today2 = date("Y-m-d");
    date_default_timezone_set("Asia/Jakarta");
    $waktu = date("H:i:s");
    $today = date("dmY");

    //kode oto
    //$query = "select max(no_pendaftaran) as last from pendaftaran";
    //$query2 = "select no_pendaftaran from pendaftaran";
    $query = "select no_pendaftaran,max(substring(no_pendaftaran,12,4)) as last from pendaftaran WHERE substring(no_pendaftaran,3,8) = '$today'";
    $query2 = "select no_pendaftaran from pendaftaran where substring(no_pendaftaran,3,8) = '$today'";

    //last no urut
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $lastno = $data['last'];

    //jumlah record 
    $jumlah = mysqli_query($koneksi, $query2);

    if ($jumlah > 0) {
        $nextnourut = $lastno + 1;
        $nextnoform = 'P-' . $today . sprintf('-%04s', $nextnourut);
    } else {
        $nextnoform = 'P-' . $today . sprintf('-%04s', 1);
    }
    ?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Pendaftaran Pasien Online Ini Digunakan Hanya Untuk <b>Pendaftaran Poli di Hari yang Sama</b>
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Setelah melakukan pendaftaran online, silahkan melakukan <b>datang 15 menit sebelum jam praktek dokter</b> dan <b>langsung datang ke bagian informasi</b>
    </div>
    <!--<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b>Selama Puasa Imunisasi</b> Dimulai<b> Jam 15.00 - 16.00 WIB</b>
    </div>-->
    <?php
    $skl = mysqli_query($koneksi, "select * from pendaftaran where tgl_daftar='$today2' AND id_jadwal='2'");
    //query batas pasien dokter santi
    $skl2 = mysqli_query($koneksi, "select * from dokter where id_dokter='1'");

    $jumlah = mysqli_num_rows($skl);

    $data2 = mysqli_fetch_array($skl2);
    $batas = $data2['batas'];

    if ($jumlah >= $batas) {
    ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>Kuota Pasien Pendaftaran Online Dr Susanti Mintarsih Sp.OG Hari ini Sudah Penuh</b>
        </div>

    <?php
    } else {
    ?>
    <!--
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Untuk <b>Poli  Dr Tauhid Islamy Sp. OG Tanggal 8 Maret 2023 Tidak Praktek</font></b>
        </b>
    </div>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Untuk <b><font>Poli Dr Susanti Mintarsih, Sp.OG</b> Tanggal <b>Tanggal 23 Februari 2023 Tidak Praktek</font></b>
        </b>
    </div>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <font color="red">Untuk Pelayanan <b>Poli Dr Diah Rahmi Kunarti Sp. A </b> Tanggal <b>23 Januari 2023 Tidak Praktek</b></font>
        </b>
    </div>
    
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <font color="red">Untuk Pelayanan <b>Poli Dr Bagus Mukti Wibowo, Sp.OG</b> Tanggal <b>21 Januari 2023 Tidak Praktek</b></font>
        </b>
    </div>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><font color="red">Untuk Pelayanan Poli<b> Dr Melita Widyastuti Sp. A, M. Kes</b> Tanggal <b>18 Januari 2023 Tidak Praktek</b></font>
        </b>
    </div>
    
    
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Untuk Pelayanan <b><font>Poli Dr Diah Rahmi Kunarti, Sp.A</b> Tanggal <b>02 November 2022 Tidak Praktek</font></b>
        </b>
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Kuota Pasien Pendaftaran Online <b>Dr Susanti Mintarsih Sp.OG Masih Tersedia
        Untuk Pelayanan <b>Poli Dr Susanti Mintarsih Sp. OG Sementara Tidak Menerima Pendaftaran Online
        </b>
    </div>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Untuk Pelayanan <b><font>Poli Dr Susanti Mintarsih Sp. OG</b> Tanggal <b>7 April 2022 Dipindah Sabtu,9 April 2022 Jam 14.00 WIB</font></b>
        </b>
    </div>-->
    <?php
    }
    ?>
    <!--<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Untuk Pelayanan <b><font>Poli Dr Susanti Mintarsih, Sp.OG</b> Tanggal <b>30 Juni 2022 Tidak Praktek</font></b>
        </b>
    </div>-->
    
    <div class="card mb-3">
        <div class="card-header">
            Pendaftaran Online RSIA Al Hasanah Madiun
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="post" action="proses_tambah_daftar.php" name="forminputdaftar" id="forminputdaftar" enctype="multipart/form-data">

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>No Pendaftaran</label></td>
                            <input type="text" name="no_daftar" id="no_daftar" class="form-control" readonly="" value="<?php echo "$nextnoform" ?>" /></td>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Pasien Lama/Baru
                            </label>
                            <select name="status" id="status" class="form-control">
                                <option value="baru">Baru</option>
                                <option value="lama">Lama</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="tno_rm" style="display: none;">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> No RM (Format = XX.XX.XX)
                            </label>
                            <input type="text" name="no_rm" id="no_rm" class="form-control" placeholder="Masukkan NO RM" />
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="tnama" style="display:block;">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Nama Pasien
                            </label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Pasien" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="talamat" style="display:block;">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Alamat
                            </label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3" id="ttgllhr" style="display:block;">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Tanggal Lahir
                            </label>
                            <input type="date" name="tgllhr" id="tgllhr" class="form-control" /></td>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Pilih Poliklinik/Dokter/Jadwal
                            </label>
                            <select name="jadwal" id="jadwal" class="form-control">
                                <option value=" " required="" Selected>- Pilih Jadwal -</option>
                                <?php
                                if ($jumlah >= $batas) {
                                    //tampil semua kecuali dr santi
                                    $sql = mysqli_query($koneksi, "SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=1 AND NOT d.id_dokter=4");
                                } else {
                                    //semua dokter
                                    $sql = mysqli_query($koneksi, "SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal");
                                }
                                // RUBAH JIKA DOKTER TIDAK POLI
                                //kecuali dr santi dan dr bagus
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=1 AND NOT d.id_dokter=4");
                                //tampil semua kecuali dr melita
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=6");
                                //tampil semua kecuali dr diah
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=5");
                                //tampil semua kecuali dr santi dan dr bagus
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=6 AND NOT d.id_dokter=4");
                                //tampil semua kecuali dr tauhid
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=3");
                                //tampil semua kecuali dr santi,dr tauhid
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=1 AND NOT d.id_dokter=3");
                                //tampil semua kecuali dr santi
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=1");
                                //tampil semua kecuali dr tauhid, dr melita
                                //$sql = mysqli_query($koneksi,"SELECT r.*,p.*,d.*,j.* FROM relasi r INNER JOIN poli p ON r.id_poli=p.id_poli INNER JOIN dokter d ON r.id_dokter=d.id_dokter INNER JOIN jadwal j ON r.id_jadwal=j.id_jadwal WHERE NOT d.id_dokter=3 AND NOT d.id_dokter=5");
                                while ($r = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo "$r[id_relasi]" ?>"><?php echo "Poli $r[nama_poli] | $r[nama_dok] | $r[hari], $r[waktu] WIB" ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> Pembayaran
                            </label>
                            <select name="bayar" id="bayar" class="form-control">
                                <option value="" required="" Selected>- Pilih Cara Bayar -</option>
                                <option value="bpjs"> BPJS/JKN </option>
                                <option value="umum"> Umum </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>
                                <font color="red">*</font> No Telepon
                            </label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan No Telepon" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea class="form-control" name="ket"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <input type="submit" name="proses" value="Kirim Form Pendaftaran" class="btn btn-primary" onClick="kosong_daftar(); return false;">
                            <input type="hidden" name="hno" value="<?php echo "$nextnoform" ?>">
                            <input type="hidden" name="htgl" value="<?php echo "$today2" ?>">
                            <input type="hidden" name="hjam" value="<?php echo "$waktu" ?>">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <font color="red"><b>KET : *</font> = Wajib</b>
                        </div>
                    </div>
            </div>
            </form>

</body>

</html>