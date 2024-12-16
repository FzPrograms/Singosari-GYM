<?php
session_start(); // Mulai session

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['session_email'])) {
    header("Location: ../register-login/login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Tampilkan informasi pengguna
echo "Selamat datang, " . $_SESSION['session_nama'] . "!";
echo "<br>Email Anda: " . $_SESSION['session_email'];
?>
