<?php
include("config.php");

if (isset($_POST["daftar"])) {
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$agama = $_POST["agama"];
	$sekolah_asal = $_POST["sekolah_asal"];

	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

	if (mysqli_query($connection, $sql)) {
		header("Location: index.php");
	}
} else {
	die("Access forbidden!");
}
?>
