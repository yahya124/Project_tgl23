<!DOCTYPE html>
<html>
<head>
	<title>Akhlak Mulia SMK EX</title>
</head>
<body>
	<h2>Foam keaagamaan</h2>

	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

	<h3>Edit Data Siswa</h3>

	<?php  

	include('koneksi.php');

	$id = $GET['id'];

	$show = mysql_query("SELECT * FROM Siswa WHERE siswa_id='$id'");

	if (mysql_num_rows($show) == 0){

		echo '<script>window.history.back()</script>';
	}else{

		$data = mysql_fetch_assoc($show);

	}
	?>

	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<<?php echo $id ?>">
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="NIS" value="<?php echo $data ['Siswa_nis'];  ?>" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="Nama" size="30" value="<?php echo $data ['Siswa_nama'];  ?>" required></td>
			</tr>
			<tr>
				<td>Sholat Tahajud</td>
				<td>:</td>
				<td>
					<select name="Sholat Tahajud" required>
						<option value="ya" <?php if ($data['Siswa_Tahajud'] == 'ya'){ echo 'selected'; }  ?>>ya</option>
						<option value="tidak" <?php if ($data['Siswa_Tahajud'] == 'tidak'){ echo 'selected'; }  ?>>tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sholat Duha</td>
				<td>:</td>
				<td>
					<select name="Sholat Duha" required>
						<option value="ya" <?php if ($data['Siswa_Duha'] == 'ya'){ echo 'selected'; }  ?>>ya</option>
						<option value="tidak" <?php if ($data['Siswa_Duha'] == 'tidak'){ echo 'selected'; }  ?>>tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sholat Wajib</td>
				<td>:</td>
				<td>
					<select name="Sholat Wajib" required>
						<option value="Ya,Saya Sholat 5 Waktu" <?php if ($data['Siswa_Sholat wajib'] == 'Ya,saya Sholat 5 Waktu'){ echo 'selected'; }  ?>>Ya,Saya Sholat 5 Waktu</option>
						<option value="Ada Sholat yang tidak saya lakukan" <?php if ($data['Siswa_Sholat wajib'] == 'Ada Sholat yang tidak saya lakukan'){ echo 'selected'; }  ?>>Ada Sholat yang tidak saya lakukan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tilawah</td>
				<td>:</td>
				<td>
					<select name="Tilawah" required>
						<option value="ya" <?php if ($data['Siswa_Tilawah'] == 'ya'){ echo 'selected'; }  ?>>ya</option>
						<option value="tidak" <?php if ($data['Siswa_Tilawah'] == 'tidak'){ echo 'selected'; }  ?>>tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbps;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>