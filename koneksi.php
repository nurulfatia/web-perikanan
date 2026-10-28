<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_simpi_tangkap";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi database gagal.");
}
?>
