<?php
$host = "localhost"; // Sesuaikan dengan host Anda
$user = "root"; // Username default MySQL
$pass = ""; // Password default MySQL
$db   = "growandgreen"; // Nama database Anda

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
