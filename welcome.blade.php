<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>RuangTenang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Markazi Text', sans-serif;
    }

    body {
        background-color: #fafafa;
        color: #3a3a3a;
        line-height: 1.6;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    ul {
        list-style: none;
    }

    header.navbar {
        background-color: #abd2cd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1px 60px;
        position: sticky;
        top: 0;
        z-index: 10;
        height: 102px; /* Menentukan tinggi navbar agar bisa dihitung dalam tinggi hero */
    }

    .logo {
        width: 100px;
        height: 100px;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 50px;
    }

    .nav-links {
        display: flex;
        gap: 40px;
    }

    .nav-links li a {
        font-size: 21px;
        font-weight: bold;
        color: #3a8da6;
    }

    .auth-buttons {
        display: flex;
        gap: 30px;
        align-items: center;
        font-size: 21px;
    }

    .auth-buttons .btn-daftar {
        background-color: #2E7D84;
        color: white;
        padding: 10px 30px;
        border-radius: 30px;
        transition: background-color 0.3s ease;
    }

    .auth-buttons .btn-daftar:hover {
        background-color: #007C91;
    }

    .auth-buttons .btn-masuk {
        background-color: #F8F8F8;
        color: #3a3a3a;
        padding: 10px 30px;
        border-radius: 30px;
        transition: background-color 0.3s ease, color 0.3s ease;
        border: 1px solid #c0c0c0;
    }

    .auth-buttons .btn-masuk:hover,
    .auth-buttons .btn-masuk:active {
        background-color: #2E7D84;
        color: white;
        border-color: #2E7D84;
    }

    /* Perombakan CSS untuk hero section */
    .hero-container { /* Kontainer utama untuk hero section */
        display: flex;
        height: calc(100vh - 102px); /* Mengisi sisa tinggi viewport setelah navbar */
        position: relative; /* Untuk positioning elemen di dalamnya */
    }

    .hero-left {
        flex: 1;
        background: #fafafa; /* Latar belakang seperti .left pada daftar */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .hero-left .hero-image { /* Gaya untuk gambar di hero-left */
        max-width: 55%;
        height: auto;
        margin-bottom: 20px;
    }

    .hero-left h2 {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        color: #3a3a3a; /* Menyesuaikan warna teks */
    }

    .hero-right {
        flex: 1;
        background: #D9E6E2; /* Latar belakang seperti .right pada daftar */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-right p {
        font-size: 20px;
        margin-bottom: 30px; /* Menambahkan margin bawah */
        max-width: 600px; /* Batasi lebar teks untuk keterbacaan */
    }

    .btn-bergabung {
        background-color: #2e7d84;
        color: #fff;
        padding: 10px 40px; /* Menyesuaikan padding agar mirip tombol daftar */
        border-radius: 12px; /* Menyesuaikan border-radius agar mirip tombol daftar */
        display: inline-block;
        font-weight: bold;
        font-size: 20px; /* Menyesuaikan ukuran font */
        box-shadow: 0 4px 4px rgba(0,0,0,0.25); /* Menambahkan bayangan */
        transition: background-color 0.3s ease;
    }

    .btn-bergabung:hover {
        background-color: #007C91; /* Efek hover */
    }

    .highlight {
        color: #f39b80;
        font-weight: bold;
    }

    section {
        padding: 80px 200px;
        text-align: center;
    }

    .welcome {
        background-color: #efd2c3;
        padding: 317px 180px;
    }

    .welcome h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .welcome p {
        font-size: 21px;
        margin: auto;
    }

    .support {
        padding: 317px 180px;
    }

    .support h3 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .support p {
        max-width: 800px;
        margin: auto;
        font-size: 21px;
    }

    .why {
        background-color: #d9e6e2;
        padding: 151px;
    }

    .why h3 {
        font-size: 36px;
        margin-bottom: 40px;
    }

    .why-content {
        display: flex;
        gap: 50px;
        align-items: flex-start;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 30px;
    }

    .why-content img {
        max-width: 400px;
        height: auto;
    }

    .why-content ul {
        text-align: left;
        max-width: 500px;
    }

    .why-content li {
        margin-bottom: 20px;
        font-size: 18px;
    }

    footer.footer {
        background-color: #abd2cd;
        padding: 50px 100px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 40px;
    }

    .footer-left img {
        width: 100px;
        margin-bottom: 10px;
    }

    .footer-left p {
        font-size: 14px;
        color: #333;
    }

    .footer-right {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
    }

    .footer-links h4,
    .footer-newsletter h4 {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .footer-links ul li,
    .footer-newsletter input {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .footer-newsletter input {
        padding: 8px 10px;
        border: 1px solid #c45c96;
        border-radius: 6px;
        width: 200px;
    }

    .footer-newsletter button {
        padding: 8px 15px;
        background-color: #2e7d84;
        color: #fff;
        border: none;
        border-radius: 6px;
        margin-top: 10px;
        cursor: pointer;
    }
</style>
</head>
<body>

    <header class="navbar">
        <img src="{{ asset('images/logo_rumah_aman__2_-removebg-preview 1.svg') }}" alt="Logo RuangTenang" class="logo" />
        <div class="nav-right">
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <a href="{{ route(name: 'login') }}" class="btn-masuk">Masuk</a>
                <a href="{{ route('daftar') }}" class="btn-daftar">Daftar</a>
            </div>
        </div>
    </header>

    <div class="hero-container">
        <div class="hero-left">
            <img class="hero-image" src="{{ asset('images/2023-05-20__6_-removebg-preview 1.svg') }}" alt="Ilustrasi Komunitas" />
            <h2>Jalani hari dengan lebih mindful bersama kami</h2>
        </div>
        <div class="hero-right">
            <p>
                <span class="highlight">#RuangTenang</span> hadir untuk membantu para pengguna dan korban kekerasan seksual yang tidak berani melapor dan tidak tahu apa yang harus dilakukannya setelah mengalami kekerasan seksual.
            </p>
            <a href="{{ route('daftar') }}" class="btn-bergabung">Bergabung &rarr;</a>
        </div>
    </div>

    <section class="welcome">
        <h2>Selamat Datang di RuangTenang</h2>
        <p>
            Tempat yang aman dan suportif untuk kamu yang pernah mengalami kekerasan seksual atau merasa bingung harus ke mana mencari bantuan.
            Kami hadir untuk mendengarkan, membantu, dan mendampingi setiap langkahmu menuju pemulihan.
        </p>
    </section>

    <section class="support">
        <h3>Kamu Tidak Sendiri, Kami Disini Untuk Membantumu</h3>
        <p>
            Kamu tidak harus melewati ini sendirian. Di RuangTenang, semua langkah kecilmu menuju pemulihan sangat berarti. Kami hadir untuk membantumu.
        </p>
    </section>

    <section class="why">
        <h3>Kenapa di <span class="highlight">RuangTenang?</span></h3>
        <div class="why-content">
            <img src="{{ asset('images/IMG_0400-removebg-preview 1.svg') }}" alt="Ilustrasi Kenapa Memilih RuangTenang" />
            <ul>
                <li><strong>Informasi dan Layanan Terpadu:</strong> Dapatkan akses ke informasi, konseling, dan komunitas yang peduli.</li>
                <li><strong>Dukungan Psikologis:</strong> Dapatkan dukungan profesional dari konselor berpengalaman.</li>
                <li><strong>Akses dan Keamanan Informasi:</strong> Data kamu aman dan dilindungi.</li>
            </ul>
        </div>
        <a href={{ route('daftar') }} class="btn-bergabung">Bergabung &rarr;</a>
    </section>

    <footer class="footer">
        <div class="footer-left">
            <img src="{{ asset('images/logo_rumah_aman__2_-removebg-preview 1.svg') }}" alt="Logo RuangTenang" class="footer-logo" />
            <p>Copyright &copy; 2025 RuangTenang<br/>All rights reserved</p>
        </div>
        <div class="footer-right">
            <div class="footer-links">
                <h4>RuangTenang</h4>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="footer-newsletter">
                <h4>Berlangganan Notifikasi</h4>
                <input type="email" placeholder="Email kamu" />
                <button>Kirim</button>
            </div>
        </div>
    </footer>

</body>
</html>