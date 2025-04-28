<?php
$host = "localhost"; // Server database
$user = "root";      // Username database
$password = "";      // Password database
$dbname = "ibu_hamil"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
