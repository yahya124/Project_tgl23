<?php

if (isset($_POST ['simpan'])){

	include('koneksi.php');

	$id				= $_POST['id'];
	$nis			= $_POST['nis'];
	$nama			= $_POST['nama'];
	$tahajud		= $_POST['tahajud'];
	$duha			= $_POST['duha'];
	$solatwajib		= $_POST['sholat wajib'];
	$tilawah		= $_POST['tilawah'];

	$update = mysql_query("UPDATE siswa SET Siswa_nis='$nis', Siswa_nama='$nama', Siswa_Tahajud='$tahajud', Siswa_Duha='$duha', Siswa_Sholat wajib='$solatwajib', Siswa_Tilawah='$tilawah' WHERE siswa_id='$id'") or die (mysql_error());
	if($update){

		echo 'data berhasil di tambahkan! ';
		echo '<a href="edit.php?id='.$id.'">kembali</a>';

	}else{

		echo 'gagal menambahkan data! ';
		echo '<a href="edit.php?id='.$id.'">kembali</a>';

	}
}else{
	
	echo '<script>window.history.back()</script>';
}
?>