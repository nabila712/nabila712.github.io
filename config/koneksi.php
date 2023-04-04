<?php
$host="localhost";
$user="rsiaalha_webuser";
$pass="simrsAH123";
$dbname="rsiaalha_web";

$koneksi = mysqli_connect("$host","$user","$pass","$dbname");

// Check connection
if (mysqli_connect_errno()){
	mysqli_connect_error();
}

//mysql_connect($host,$user,$pass);
//mysql_select_db($dbname)
//or die("koneksi gagal");

//$result = mysql_list_tables($dbname) or die(mysql_error());
//    while ($row = mysql_fetch_row($result)) {
//        mysql_query("REPAIR TABLE $row[0]");
//        mysql_query("OPTIMIZE TABLE $row[0]");
//    }
?>