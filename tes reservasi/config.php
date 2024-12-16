<?php
// Pengaturan koneksi database
$host = 'localhost:3307';      // Biasanya localhost
$dbname = 'reservasi'; // Nama database Anda
$username = 'root';        // Username database
$password = '';            // Password database

// Membuat koneksi
try {
    $koneksi = mysqli_connect($host, $username, $password, $dbname);
    
    // Cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>