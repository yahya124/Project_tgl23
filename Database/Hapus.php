<?php  

if(isset($_GET['id'])){

	include('koneksi.php');

	$id = $_GET['id'];

	$cek = mysql_query("SELECT siswa_id FROM siswa WHERE siswa_id='$id'") or die(mysql_error());

	if (mysql_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	}else{

		$del mysql_query("DELETE FROM siswa WHERE siswa_id='$id'");

		if($del){

			echo 'data berhasil di hapus! ';
			echo '<a href="index.php">kembali</a>';

		}else{

			echo 'gagal menghapus data! ';
			echo '<a href="index.php">kembali</a>';

		}
	}
}else{

	echo '<script>window.history.back()</script>';

}
?>