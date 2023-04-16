<?php
$host = "localhost";
$user = "richie";
$password = "08082003";
$database = "pendaftaran_siswa";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
	die("Connection to database failed: " . mysqli_connect_errno());
}
?>
