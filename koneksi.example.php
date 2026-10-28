<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "NAMA_DATABASE";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi database gagal.");
}
?>