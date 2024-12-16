<?php
include "../service/database.php"; // Pastikan path ini benar

$email = 'zuccc@gmail.com'; // Ganti dengan email yang sesuai

$sql = "
SELECT 
    pl.Tanggal_Mulai,
    pl.Tanggal_Berakhir,
    pr.Nama_Program,
    pe.Jenis_Periode,
    pe.Harga AS Harga_Periode,
    pl.Email,
    CASE 
        WHEN pl.Tanggal_Berakhir >= CURDATE() THEN 'Aktif'
        ELSE 'Tidak Aktif'
    END AS Status_Member
FROM 
    Paket_Langganan pl
JOIN 
    Program pr ON pl.ID_Program = pr.ID_Program
JOIN 
    Periode pe ON pl.ID_Periode = pe.ID_Periode
WHERE 
    pl.Email = '$email';"; // Pastikan untuk menggunakan prepared statements untuk keamanan

$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "<h2>Konfirmasi Pembayaran</h2>";
        echo "<p><strong>Nama Program:</strong> " . $row["Nama_Program"] . "</p>";
        echo "<p><strong>Jenis Periode:</strong> " . $row["Jenis_Periode"] . "</p>";
        echo "<p><strong>Tanggal Mulai:</strong> " . $row["Tanggal_Mulai"] . "</p>";
        echo "<p><strong>Tanggal Berakhir:</strong> " . $row["Tanggal_Berakhir"] . "</p>";
        echo "<p><strong>Harga:</strong> Rp" . number_format($row["Harga_Periode"], 2, ',', '.') . "</p>";
        echo "<p><strong>Status Member:</strong> " . $row["Status_Member"] . "</p>";
    }
} else {
    echo "Tidak ada data ditemukan.";
}
?>