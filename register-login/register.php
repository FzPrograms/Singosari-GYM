<?php
    session_start(); // Start session to read error messages
    $error = ""; // Initialize error message
    include "../service/database.php";

    $register_message = "";

    if(isset($_POST["register"])){
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $no_tlp = $_POST["no_tlp"];

        $sql = "INSERT INTO pelanggan (Nama, Alamat, Email, Nomor_Telepon) VALUES
        ('$nama', '$alamat', '$email', '$no_tlp')";

        if($db->query($sql)){
            header("location: login.php?message=Daftar akun berhasil, silahkan Masuk.");
        }else{
            $register_message = " Daftar akun gagal, silahkan coba lagi!";
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

    <div class="container-content" id="signup">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="nama" id="nama" placeholder="Nama" required>
                <label for="nama">Nama</label>
            </div>
            <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
                <label for="alamat">Alamat</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-phone "></i>
                <input type="number" name="no_tlp" id="no_tlp" placeholder="Nomor Telepon" required>
                <label for="no_tlp">Nomor Telepon</label>
            </div>
            <?php if ($error): ?>
                <p style="color: red;"><?= $error ?></p>
            <?php endif; ?>
            <input type="submit" class="btn" value="Sign Up" name="register">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <script src="script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>