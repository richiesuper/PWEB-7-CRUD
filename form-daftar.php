<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SMK Coding - Formulir Pendaftaran Siswa Baru</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<form action="proses-pendaftaran.php" method="POST">
				<fieldset>
					<legend>Formulir Pendaftaran Siswa Baru</legend>
					<div class="form-fields">
						<label for="nama">Nama:</label>
						<input id="nama" type="text" name="nama" placeholder="Nama Lengkap">
						<label for="alamat">Alamat:</label>
						<textarea id="alamat" name="alamat"></textarea>
						<label for="jenis_kelamin">Jenis Kelamin:</label>
						<span>
							<input id="jenis_kelamin_l" type="radio" name="jenis_kelamin" value="Laki-laki">
							<label for="jenis_kelamin_l">Laki-laki</label>
							<input id="jenis_kelamin_p" type="radio" name="jenis_kelamin" value="Perempuan">
							<label for="jenis_kelamin_p">Perempuan</label>
						</span>
						<label for="agama">Agama:</label>
						<select id="agama" name="agama">
							<option>Islam</option>
							<option>Kristen</option>
							<option>Katolik</option>
							<option>Hindu</option>
							<option>Buddha</option>
							<option>Konghucu</option>
						</select>
						<label for="sekolah_asal">Sekolah Asal</label>
						<input id="sekolah_asal" type="text" name="sekolah_asal" placeholder="Nama Sekolah">
						<button name="daftar" value="Button Daftar">Daftar</button>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
