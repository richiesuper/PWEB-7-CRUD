<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pendaftaran_siswa";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
	die("Connection to database failed: " . mysqli_connect_errno());
}
?>
