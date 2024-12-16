<?php
// Ambil semua data loker dari database
include "../service/database.php";

$query = "SELECT * FROM Loker";
$result = mysqli_query($db, $query);

// Proses reservasi jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $selectedLockers = $_POST['lockers']; // Array dari loker yang dipilih

    // Validasi input
    if (empty($date) || empty($startTime) || empty($endTime) || empty($selectedLockers)) {
        $message = "Semua field harus diisi.";
    } else {
        // Update status loker menjadi 'Digunakan'
        foreach ($selectedLockers as $lockerId) {
            $updateQuery = "UPDATE Loker SET Status = 'Digunakan' WHERE ID_Loker = $lockerId";
            mysqli_query($db, $updateQuery);
        }
        $message = "Reservasi berhasil pada $date dari $startTime hingga $endTime.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservasi Loker Gym</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .locker {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }
        .locker.reserved {
            background-color: #d3d3d3; /* Warna abu-abu untuk loker yang digunakan */
            cursor: not-allowed; /* Mengubah kursor untuk menunjukkan bahwa loker tidak dapat dipilih */
        }
    </style>
</head>
<body>
    <div class="loker">
        <h2>Reservasi Loker Gym</h2>

        <?php if (isset($message)) { echo "<div class='message'>$message</div>"; } ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" id="date" name="date" required />
            </div>

            <div class="form-group">
                <label for="startTime">Waktu Mulai:</label>
                <input type="time" id="startTime" name="startTime" required />
            </div>

            <div class="form-group">
                <label for="endTime">Waktu Selesai:</label>
                <input type="time" id="endTime" name="endTime" required />
            </div>

            <div class="locker-grid">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="locker <?php echo $row['Status'] == 'Digunakan' ? 'reserved' : ''; ?>">
                        <input type="checkbox" id="locker<?php echo $row['ID_Loker']; ?>" name="lockers[]" value="<?php echo $row['ID_Loker']; ?>" <?php echo $row['Status'] == 'Digunakan' ? 'disabled' : ''; ?> />
                        <label for="locker<?php echo $row['ID_Loker']; ?>">Loker <?php echo $row['ID_Loker']; ?></label>
                    </div>
                <?php } ?>
            </div>

            <button class=btn type="submit">Reservasi</button>
        </form>
    </div>
</body>
</html>