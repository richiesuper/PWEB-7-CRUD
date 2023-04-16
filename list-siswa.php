<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SMK Coding - Daftar Calon Siswa</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container-for-list">
			<header>
				<div class="heading">Daftar Calon Siswa</div>
				<nav>
					<a href="form-daftar.php">[+] Tambah Baru</a>
				</nav>
			</header>
			<table>
				<thead>
					<tr>
						<th class="no">No</th>
						<th class="nama">Nama</th>
						<th class="alamat">Alamat</th>
						<th class="jenis-kelamin">Jenis Kelamin</th>
						<th class="agama">Agama</th>
						<th class="sekolah-asal">Sekolah Asal</th>
						<th class="tindakan">Tindakan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM calon_siswa";
						$query = mysqli_query($connection, $sql);

						while ($row = mysqli_fetch_array($query)) {
							echo "<tr>";
							echo "<td class=\"no\">" . $row['id'] . "</td>";
							echo "<td>" . $row['nama'] . "</td>";
							echo "<td>" . $row['alamat'] . "</td>";
							echo "<td>" . $row['jenis_kelamin'] . "</td>";
							echo "<td>" . $row['agama'] . "</td>";
							echo "<td>" . $row['sekolah_asal'] . "</td>";
							echo "<td class=\"tindakan\"><a href=\"form-edit.php?id=" . $row['id'] . "\">Edit</a> | <a href=\"hapus.php?id=" . $row['id'] . "\">Hapus</a></td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			<div class="count">Total: <?php echo mysqli_num_rows($query); ?></div>
		</div>
	</body>
</html>
