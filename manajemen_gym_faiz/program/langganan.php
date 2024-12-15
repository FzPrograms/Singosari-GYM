<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="preload" as="image" href="../assets/images/hero-banner.png">
    <link rel="preload" as="image" href="../assets/images/hero-circle-one.png">
    <link rel="preload" as="image" href="../assets/images/hero-circle-two.png">
    <link rel="preload" as="image" href="../assets/images/heart-rate.svg">
    <link rel="preload" as="image" href="../assets/images/calories.svg">
    <style>
        /* Hide radio buttons */
        input[type="radio"] {
            display: none;
        }

        /* Style the labels to look like buttons */
        label {
            display: block;
            padding: 10px;
            margin: 5px 0;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        label:hover {
            background-color: #e0e0e0;
        }

        input[type="radio"]:checked + label {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
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

    <form action="../bayar/bayar.html" method="POST">
        <section class="section class bg-dark has-bg-image" id="class" aria-label="class" style="background-image: url('./assets/images/classes-bg.png')">
            <div class="container">
                <p class="section-subtitle">Kelas</p>
                <h2 class="h2 section-title text-center">Silahkan Pilih Program</h2>
                <ul class="class-list has-scrollbar">
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/Strenght.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Angkat Beban</a></h3>
                                </div>
                                <p class="card-text">Latihan angkat beban yang fokus pada peningkatan kekuatan dan massa otot.</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">85%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="class" value="Angkat Beban" id="class1" required>
                                <label for="class1">Pilih Kelas</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/cardio.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strength" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Cardio</a></h3>
                                </div>
                                <p class="card-text">Latihan kardiovaskular yang meningkatkan kesehatan jantung dan paru-paru.</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">70%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="class" value="Cardio" id="class2">
                                <label for="class2">Pilih Kelas</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/Aesthetic.jpg" width="416" height="240" loading="lazy" alt="Aesthetic" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Aesthetic</a></h3>
                                </div>
                                <p class="card-text">Latihan yang berfokus pada penampilan fisik dan proporsi tubuh.</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">90%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="class" value="Aesthetic" id="class3">
                                <label for="class3">Pilih Kelas</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="langganan">
            <div class="title">Silahkan Pilih Periode Langganan</div>
            <div class="isi">
                <div class="box">
                    <h3>HARIAN</h3>
                    <p>Weekdays: <span class="price">Rp20.000,00 </span></p>
                    <p>Weekend: <span class="price">Rp25.000,00</span></p>
                    <input type="radio" name="subscription" value="Harian" id="daily">
                    <label for="daily">Pilih Harian</label>
                </div>
                <div class="box">
                    <h3>BULANAN</h3>
                    <p class="special">Diskon Akhir Bulan!</p>
                    <p><span class="price">Rp120.000,00</span></p>
                    <input type="radio" name="subscription" value="Bulanan" id="monthly">
                    <label for="monthly">Pilih Bulanan</label>
                </div>
                <div class="box">
                    <h3>TAHUNAN</h3>
                    <p class="special">Diskon Awal Tahun!</p>
                    <p><span class="price">Rp1.120.000,00</span></p>
                    <input type="radio" name="subscription" value="Tahunan" id="yearly">
                    <label for="yearly">Pilih Tahunan</label>
                </div>
            </div>
        </section>

        <section class="section class bg-dark has-bg-image" id="trainer" aria-label="trainer" style="background-image: url('./assets/images/classes-bg.png')">
            <div class="container">
                <p class="section-subtitle">Trainer</p>
                <h2 class="h2 section-title text-center">Silahkan Pilih Trainer</h2>
                <ul class="class-list has-scrollbar">
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer1.jpg" width="416" height="240" loading="lazy" alt="Trainer 1" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 1</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Angkat Beban</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">85%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 1" id="trainer1">
                                <label for="trainer1">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer2.jpg" width="416" height="240" loading="lazy" alt="Trainer 2" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 2</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Angkat Beban</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">70%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 2" id="trainer2">
                                <label for="trainer2">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; ```html--height: 240;">
                                <img src="./assets/images/trainer3.jpg" width="416" height="240" loading="lazy" alt="Trainer 3" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 3</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Kardio</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">90%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 3" id="trainer3">
                                <label for="trainer3">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer4.jpg" width="416" height="240" loading="lazy" alt="Trainer 4" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 4</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Kardio</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Kelas Tersedia</p>
                                        <span class="progress-value">85%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 4" id="trainer4">
                                <label for="trainer4">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer55.jpg" width="416" height="240" loading="lazy" alt="Trainer 5" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 5</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Aesthetic</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Class Full</p>
                                        <span class="progress-value">60%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 60%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 5" id="trainer5">
                                <label for="trainer5">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer66.jpg" width="416" height="240" loading="lazy" alt="Trainer 6" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt ="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 6</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Aesthetic</p>
                                <div class="card-progress">
                                    <div class="progress-wrapper">
                                        <p class="progress-label">Class Full</p>
                                        <span class="progress-value">60%</span>
                                    </div>
                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 60%"></div>
                                    </div>
                                </div>
                                <input type="radio" name="trainer" value="Trainer 6" id="trainer6">
                                <label for="trainer6">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <button type="submit" class="pay-button">Konfirmasi Pembayaran</button>
    </form>

    <script src="./assets/js/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>