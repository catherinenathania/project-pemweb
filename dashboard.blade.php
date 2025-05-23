<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Interaktif</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body, html {
      font-family: 'Segoe UI', sans-serif;
      background: #fafafa;
    }

    .container {
      max-width: 1425px;
      margin: 0 auto;
      padding: 20px 0 20px 0;
    }

    /* Header */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 20px;
    }

    .logo {
      width: 50px;
    }

    nav a {
      margin: 0 20px;
      font-size: 20px;
      text-decoration: none;
      color: #000;
      transition: color 0.3s;
    }

    nav a.active,
    nav a:hover {
      font-weight: bold;
      color: #08979d;
    }

    .profile-icon {
      font-size: 24px;
    }

    /* Welcome Box */
    .welcome-box {
      background: #abd2cd;
      color: #333;
      text-align: center;
      padding: 80px;
      margin-bottom: 30px;
      transition: transform 0.3s;
      clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 100%, 0 80%);
    }

    .welcome-box:hover {
      transform: scale(1.01);
    }

    .welcome-box h2 {
      font-size: 32px;
      margin-bottom: 10px;
    }

    .welcome-box p {
      font-size: 18px;
    }

    /* Features */
    .features {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 40px;
    }

    .feature-box {
      background: #f2ebdd;
      border-radius: 20px;
      padding: 20px;
      text-decoration: none;
      color: #000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 48%;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-box:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .feature-box img {
      width: 100px;
    }

    .feature-box h3 {
      font-size: 20px;
      margin: 0;
      line-height: 1.4;
      padding: 0 10px;
    }

    /* Robot khusus */
    .feature-box.robot {
      background: #d9e6e2;
      flex-direction: row;
      justify-content: space-between;
    }

    /* Tips Section */
    .tips-section h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .tips-grid {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .tip-card {
      background: rgba(8, 151, 157, 0.18);
      border-radius: 20px;
      padding: 20px;
      flex: 1;
      display: flex;
      text-decoration: none;
      color: #000;
      align-items: center;
      min-width: 250px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .tip-card:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
    }

    .tip-card img {
      width: 100px;
      margin-right: 20px;
    }

    .tip-card .text h4 {
      margin: 0;
      font-size: 16px;
    }

    .view-count {
      color: #df7b5d;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <img src="{{ asset('images/logo_rumah_aman__2_-removebg-preview 1.svg') }}" class="logo" alt="Logo" />
      <nav>
        <a href="#">Notifikasi</a>
        <a href="#" class="active">Beranda</a>
        <a href="#">Pengaturan</a>
      </nav>
      <div class="profile-icon">👤</div>
    </header>

    <section class="welcome-box">
      <h2>Halo Gabriel!</h2>
      <p>Sampaikan apa yang kamu rasakan kepada kami</p>
    </section>

    <section class="features">
      <a href="sistem.html" class="feature-box">
        <img src="https://placehold.co/100x100" alt="Sistem" />
        <h3>Sistem<br />Rekomendasi</h3>
      </a>

      <a href="robot.html" class="feature-box robot">
        <h3>Robot<br />Percakapan</h3>
        <img src="https://placehold.co/100x100" alt="Robot" />
      </a>
    </section>

    <section class="tips-section">
      <h2>Tips Populer :</h2>
      <div class="tips-grid">
        <a href="https://www.halodoc.com/artikel/latihan-pernapasan-yang-bisa-meredakan-kecemasan" target="_blank" class="tip-card">
          <img src="https://placehold.co/100x100" alt="Tip 1" />
          <div class="text">
            <h4>Latihan Pernapasan yang Bisa Meredakan Kecemasan</h4>
            <p><span class="view-count">👁️ 24 orang melihat ini</span></p>
          </div>
        </a>
        <a href="https://www.halodoc.com/artikel/5-tips-untuk-terhindar-dari-kekerasan-seksual" target="_blank" class="tip-card">
          <img src="https://placehold.co/100x100" alt="Tip 2" />
          <div class="text">
            <h4>5 Tips agar Terhindar dari Kekerasan Seksual</h4>
            <p><span class="view-count">👁️ 19 orang melihat ini</span></p>
          </div>
        </a>
      </div>
    </section>
  </div>
</body>
</html>