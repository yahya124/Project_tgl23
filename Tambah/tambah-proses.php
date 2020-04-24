<?php

if (isset($_POST ['tambah'])){

	include('koneksi.php');

	$nis			= $_POST['nis'];
	$nama			= $_POST['nama'];
	$tahajud		= $_POST['tahajud'];
	$duha			= $_POST['duha'];
	$solatwajib		= $_POST['sholat wajib'];
	$tilawah		= $_POST['tilawah'];

	$input = mysql_query("INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$tahajud', '$duha', '$solatwajib', '$tilawah')") or die (mysql_error());

	if($input){

		echo 'data berhasil di tambahkan! ';
		echo '<a href="tambah.php">kembali</a>';

	}else{

		echo 'gagal menambahkan data! ';
		echo '<a href="tambah.php">kembali</a>';

	}

}else{

		echo '<script>window.history.back()</script>';
}
?>