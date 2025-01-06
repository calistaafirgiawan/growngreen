<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'growandgreen');

// Cek koneksi
if ($conn->connect_error) {
    die("<script>alert('Koneksi ke database gagal: " . $conn->connect_error . "'); window.location.href='landing.php';</script>");
}

// Ambil data dari form
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (!empty($name) && !empty($email) && !empty($message)) {
    // Query untuk memasukkan data ke database
    $sql = "INSERT INTO volunteers (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Formulir berhasil dikirim! Terima kasih telah bergabung.'); window.location.href='landing.php';</script>";
    } else {
        echo "<script>alert('Gagal mengirim formulir: " . $conn->error . "'); window.location.href='landing.php';</script>";
    }
} else {
    echo "<script>alert('Semua kolom harus diisi!'); window.location.href='landing.php';</script>";
}

// Tutup koneksi
$conn->close();
?>
