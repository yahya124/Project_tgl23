<<?php 
$host ="localhost";
$user ="root";
$pass ="";
$name ="keagamaan";

$koneksi = mysqli_connect($host, $user, $pass) or die ("koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("tidak ada database yang di pilih!");
 ?>