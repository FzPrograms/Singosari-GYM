<?php
include "../service/database.php"; // Pastikan path ini benar

if (isset($_POST["confirm-button"])) {
    $tanggal_mulai = "2024-12-05";
    $tanggal_berakhir = "2025-01-05";
    $email = "zuccc@gmail.com"; // Ganti dengan email yang sesuai

    // Ambil ID dari form
    $id_program = $_POST["class"];
    $id_periode = $_POST["subscription"];
    $id_trainer = $_POST["trainer"];

    // Pastikan ID yang diambil valid
    if (empty($id_program) || empty($id_periode) || empty($id_trainer)) {
        echo "Semua pilihan harus dipilih.";
        exit();
    }

    // Query untuk memasukkan data ke tabel paket_langganan
    $sqlPaket = "INSERT INTO Paket_Langganan (Tanggal_Mulai, Tanggal_Berakhir, Email, ID_Program, ID_Periode, ID_Trainer) 
                 VALUES ('$tanggal_mulai', '$tanggal_berakhir', '$email', $id_program, $id_periode, $id_trainer)";

    // Eksekusi query
    if ($db->query($sqlPaket) === TRUE) {
        echo "Data berhasil ditambahkan ke Paket_Langganan.";
    } else {
        echo "Gagal menambahkan paket langganan: " . $db->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Langganan</title>
</head>
<body>
    <h1>Pilih Paket Langganan</h1>
    <form action="" method="POST">
        <label for="class">Pilih Program:</label><br>
        <input type="radio" name="class" value="1" id="class1" required>
        <label for="class1">Angkat Beban</label><br>
        <input type="radio" name="class" value="2" id="class2" required>
        <label for="class2">Cardio</label><br>
        <input type="radio" name="class" value="3" id="class3" required>
        <label for="class3">Aesthetic</label><br><br>

        <label for="subscription">Pilih Periode Langganan:</label><br>
        <input type="radio" name="subscription" value="1" id="daily" required>
        <label for="daily">Harian</label><br>
        <input type="radio" name="subscription" value="2" id="monthly" required>
        <label for="monthly">Bulanan</label><br>
        <input type="radio" name="subscription" value="3" id="yearly" required>
        <label for="yearly">Tahunan</label><br><br>

        <label for="trainer">Pilih Trainer:</label><br>
        <input type="radio" name="trainer" value="1" id="trainer1" required>
        <label for="trainer1">Trainer 1</label><br>
        <input type="radio" name="trainer" value="2" id="trainer2" required>
        <label for="trainer2">Trainer 2</label><br>
        <input type="radio" name="trainer" value="3" id="trainer3" required>
        <label for="trainer3">Trainer 3</label><br><br>

        <button type="submit" name="confirm-button">Konfirmasi Pembayaran</button>
    </form>
</body>
</html>