<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pembayaran</title>
        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="transaksi_style.css">
</head>
<body>



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
    
              <li>
                <a href="#home" class="navbar-link active" data-nav-link>Beranda</a>
              </li>
    
              <li>
                <a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a>
              </li>
    
              <li>
                <a href="#class" class="navbar-link" data-nav-link>Kelas</a>
              </li>
    
              <li>
                <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
              </li>
    
              <li>
                <a href="#" class="navbar-link" data-nav-link>Hubungi Kami</a>
              </li>
    
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


    <div class="content-container">
       

        <section class="payment-confirmation">
            <h1>Konfirmasi Pembayaran</h1>
            <form>
                <div class="details">
                    <div class="row">
                        <label for="program" class="label">Program</label>
                        <select id="program" class="dropdown">
                            <option value="angkat-beban" selected>Angkat Beban</option>
                            <option value="cardio">Cardio</option>
                            <option value="yoga">Yoga</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="langganan" class="label">Langganan</label>
                        <select id="langganan" class="dropdown">
                            <option value="bulanan" selected>Bulanan</option>
                            <option value="harian">Harian (Weekdays)</option>
                            <option value="harian">Harian (Weekend)</option>
                            <option value="tahunan">Tahunan</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="trainer" class="label">Trainer</label>
                        <select id="trainer" class="dropdown">
                            <option value="trainer-a" selected>Trainer A</option>
                            <option value="trainer-b">Trainer B</option>
                            <option value="trainer-c">Trainer C</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="payment-method" class="label">Metode Pembayaran</label>
                        <select id="payment-method" class="dropdown">
                            <option value="qris" selected>QRIS</option>
                            <option value="transfer-bank">Transfer Bank</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    <div class="row total">
                      <span class="label">Total Pembayaran</span>
                      <span id="total-payment" class="value">Rp 120.000</span>
                  </div>
                  
                </div>
                <a href="../qris/qris.html" class="pay-button">Cepatkan bayar 🤑🤑🤑</a>
            </form>
        </section>
    </div>

  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
