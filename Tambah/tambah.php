<!DOCTYPE html>
<html>
<head>
	<title>Akhlak Mulia SMK EX</title>
</head>
<body>
	<h2>Foam keaagamaan</h2>

	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

	<h3>Data Siswa</h3>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="NIS" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="Nama" size="30" required></td>
			</tr>
			<tr>
				<td>Sholat Tahajud</td>
				<td>:</td>
				<td>
					<select name="Sholat Tahajud" required>
						<option value="ya">ya</option>
						<option value="tidak">tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sholat Duha</td>
				<td>:</td>
				<td>
					<select name="Sholat Duha" required>
						<option value="ya">ya</option>
						<option value="tidak">tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Sholat Wajib</td>
				<td>:</td>
				<td>
					<select name="Sholat Wajib" required>
						<option value="Ya,Saya Sholat 5 Waktu">ya</option>
						<option value="Ada Sholat Yyang tidak saya lakukan">tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tilawah</td>
				<td>:</td>
				<td>
					<select name="Tilawah" required>
						<option value="ya">ya</option>
						<option value="tidak">tidak</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbps;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>