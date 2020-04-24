<!DOCTYPE html>
<html>
<head>
	<title>Akhlak Mulia SMK EX</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Foam keaagamaan</h2>

	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

	<h3>Data Siswa</h3>

	<table cellpadding=5 cellpacing="0" border="1">
		<tr bgcolor="#cccccc">
			<th>No.</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>

		<?php
		include('koneksi.php');

		$query = mysql_query("SELECT * FROM Siswa ORDER BY Siswa_nis DESC") or die(mysql_error());

		if (mysql_num_rows($query) ==0){

			echo '<tr><td colspan="6"Tidak ada data!</td></tr>';

		}else{

			$No = 1;
			while ($data = mysql_fetch_assoc($query)) {


				echo '<tr>';
					echo '<td>'.$No'<td>';
					echo '<td>'.$data['Siswa_nis'].'<td>';
					echo '<td>'.$data['Siswa_nama'].'<td>';
					echo '<td>'.$data['Siswa_kelas'].'<td>';
					echo '<td>'.$data['Siswa_jurusan'].'<td>';
					echo '<td><a href="edit.php?id='.$data ['siswa_id'].'"></a> / <a href="hapus.php?id='.$data ['siswa_id'].'" oneclick="return confrim(\'Yakin?\')">hapus</a></td>';
					echo '</tr>';

					$On++;
					
			}
		}
		?>


	</table>

</body>
</html>