<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("../config/koneksi.php");
 include ("../config/tanggal.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE pendaftaran SET cek=1 WHERE cek=0";
  mysqli_query($koneksi, $update_query);
 }
 $query = "SELECT * FROM pendaftaran ORDER BY tgl_daftar DESC LIMIT 7";
 $result = mysqli_query($koneksi, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["no_pendaftaran"].'</strong><br />
     <small><em>'.$row["nama_pas"].'</em></small><br>
	 <small>'.TanggalIndo($row["tgl_daftar"]).','.$row["jam_daftar"].'</small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM pendaftaran WHERE cek=0";
 $result_1 = mysqli_query($koneksi, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>