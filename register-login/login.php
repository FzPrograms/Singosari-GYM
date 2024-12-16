<?php
session_start(); // Mulai sesi untuk membaca pesan kesalahan
$error = isset($_SESSION['error']) ? $_SESSION['error'] : ''; 
unset($_SESSION['error']);

include "../service/database.php";

$login_message = ""; // Variabel untuk menyimpan pesan error

// Cek apakah form login dikirim
if (isset($_POST["login"])) { 
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Validasi input
    if (empty($nama) || empty($email)) {
        $login_message = "Nama dan Email tidak boleh kosong!";
    } else {
        // Query untuk mencari data pengguna di database
        $sql = "SELECT * FROM pelanggan WHERE Nama = '$nama' AND Email = '$email'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Ambil data pengguna dari database
            $data = mysqli_fetch_assoc($result);

            // Simpan data ke session
            $_SESSION['session_nama'] = $data['Nama'];
            $_SESSION['session_email'] = $data['Email'];

            // Redirect ke halaman profil
            header("Location: ../profil/profil.php");
            exit();
        } else {
            // Jika data tidak ditemukan
            $login_message = "Nama/Email Anda belum terdaftar atau salah!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <a href="../index.html" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
                <span class="span"> Singosari Fitness</span>
            </a>
            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
                </button>
                <ul class="navbar-list">
                    <li><a href="#home" class="navbar-link active" data-nav-link>Beranda</a></li>
                    <li><a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a></li>
                    <li><a href="#class" class="navbar-link" data-nav-link>Kelas</a></li>
                    <li><a href="#blog" class="navbar-link" data-nav-link>Blog</a></li>
                    <li><a href="#" class="navbar-link" data-nav-link>Hubungi Kami</a></li>
                </ul>
            </nav>
            <a href="reg_login/index.php" class="btn btn-secondary">DAFTAR / LOGIN</a>
            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        </div>
    </header>

    <div class="container-content" id="login">
        <h1 class="form-title">Login</h1>
        <form method="post" action="login.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="nama" id="nama" placeholder="Nama" required>
                <label for="nama">Nama</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <?php if ($login_message): ?>
                <p style="color: red;"><?= $login_message ?></p>
            <?php endif; ?>
            <input type="submit" class="btn" value="Login" name="login">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p> Belum Mendaftar Akun?</p>
            <a href="register.php">
            <button id="signUpButton">Register</button>
            </a>
        </div>
    </div>

    <script src="script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>