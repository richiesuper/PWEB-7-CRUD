<?php
include("config.php");

if (isset($_GET['id'])) {
	$sql = "DELETE FROM calon_siswa WHERE id = " . $_GET['id'];

	if (mysqli_query($connection, $sql)) {
		header("Location: list-siswa.php");
	} else {
		die("Failed to delete the record!");
	}
} else {
	die("Access forbidden!");
}
?>
