<?php
include("config.php");

if (!isset($_GET["id"])) {
	header("Location: list-siswa.php");
}

$sql = "SELECT * FROM calon_siswa WHERE id = " . $_GET['id'];
$query = mysqli_query($connection, $sql);

if (mysqli_num_rows($query) == 0) {
	die("Record not found in database!");
}

$student = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SMK Coding - Formulir Edit Data Pendaftaran Siswa Baru</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<form action="proses-edit.php" method="POST">
				<fieldset>
					<legend>Formulir Edit Data Pendaftaran Siswa Baru</legend>
					<div class="form-fields">
						<input id="id" type="hidden" name="id" value="<?php echo $student['id']; ?>">
						<label for="nama">Nama:</label>
						<input id="nama" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $student['nama']; ?>">
						<label for="alamat">Alamat:</label>
						<textarea id="alamat" name="alamat"><?php echo $student['alamat']; ?></textarea>
						<label for="jenis_kelamin">Jenis Kelamin:</label>
						<span>
							<input id="jenis_kelamin_l" type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($student['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
							<label for="jenis_kelamin_l">Laki-laki</label>
							<input id="jenis_kelamin_p" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($student['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
							<label for="jenis_kelamin_p">Perempuan</label>
						</span>
						<label for="agama">Agama:</label>
						<select id="agama" name="agama">
							<option <?php echo ($student['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
							<option <?php echo ($student['agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
							<option <?php echo ($student['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
							<option <?php echo ($student['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
							<option <?php echo ($student['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
							<option <?php echo ($student['agama'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
						</select>
						<label for="sekolah_asal">Sekolah Asal</label>
						<input id="sekolah_asal" type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $student['sekolah_asal']; ?>">
						<button name="finalisasi" value="Button Finalisasi">Finalisasi</button>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
