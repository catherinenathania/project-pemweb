<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Akun | RuangTenang</title>
  <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Markazi Text', serif;
    }

    html, body {
      height: 100%;
      overflow: hidden;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .left {
      flex: 1;
      background: #fafafa;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .left .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      cursor: pointer;
    }

    .left img.logo {
      width: 300px;
      height: 300px;
    }

    .left h1 {
      font-size: 56px;
      color: #008080;
      margin-top: -40px;
      margin-bottom: 100px;
    }

    .left h1 span:first-child {
      color: #08979D;
    }

    .right {
      flex: 1;
      background: #d9e6e2;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
    }

    .right h2 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 8px;
      text-align: center;
    }

    .right p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    form {
      width: 100%;
      max-width: 400px;
      text-align: left;
    }

    .form-group {
      position: relative;
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-size: 18px;
      margin-bottom: 5px;
    }

    input[type="email"],
    input[type="password"],
    input[type="text"] {
      width: 100%;
      padding: 12px 40px 12px 45px; /* Sesuaikan padding untuk ikon */
      font-size: 18px;
      border: 1px solid #000;
      border-radius: 12px;
      box-shadow: 0 4px 4px rgba(0,0,0,0.25);
    }

    .form-group img.icon {
      position: absolute;
      top: 38px; /* Sesuaikan posisi ikon */
      left: 12px;
      width: 22px;
      height: 22px;
      opacity: 0.6;
    }

    .form-group img.toggle-password {
      position: absolute;
      top: 38px; /* Sesuaikan posisi ikon toggle */
      right: 12px;
      width: 22px;
      height: 22px;
      cursor: pointer;
      opacity: 0.6;
    }

    .checkbox-group { /* Mengubah .password-row menjadi .checkbox-group sesuai HTML daftar */
      display: flex;
      align-items: center;
      justify-content: center; /* Memusatkan checkbox group */
      gap: 10px;
      margin-bottom: 20px;
      margin-top: 15px; /* Tambahkan margin-top agar tidak terlalu dekat dengan input */
    }

    .checkbox-group input[type="checkbox"] { /* Gaya untuk input checkbox */
      margin-right: 10px;
      transform: scale(1.3);
    }

    .checkbox-group label { /* Gaya untuk label checkbox */
      font-size: 16px;
      display: inline-block; /* Agar label bisa sejajar dengan checkbox */
      margin-bottom: 0;
    }

    .checkbox-group a {
      color: #007C91; /* Sesuaikan warna link */
      text-decoration: none;
    }

    button {
      background: #2E7D84;
      color: #fff;
      padding: 10px 40px;
      font-size: 20px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      box-shadow: 0 4px 4px rgba(0,0,0,0.25);
      width: 100%;
      margin-top: 10px; /* Tambahkan margin-top */
    }

    .bottom-links {
      margin-top: 20px;
      font-size: 16px;
      text-align: center;
    }

    .bottom-links a {
      color: #007C91;
      text-decoration: none;
    }

    .footer-bar {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background: #ABD2CD;
      border-top-left-radius: 35px;
      border-top-right-radius: 35px;
      z-index: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <a href={{ route('welcome') }} class="back-button">
        <img src="images/Back.svg" alt="Back" width="28" height="28">
      </a>
      <img class="logo" src="images/logo_rumah_aman__2_-removebg-preview 1.svg" alt="Logo" />
      <h1><span style="color:#08979d">Ruang</span><span style="color:#008080">Tenang</span></h1>
    </div>

    <div class="right">
      <form class="form-box">
        <h2>Daftar Akun</h2>

        <div class="form-group">
          <label for="nama">Nama Lengkap:</label>
          <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/user.png" alt="User" />
          <input type="text" id="nama" placeholder="Masukkan nama lengkap anda" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/email.png" alt="Email" />
          <input type="email" id="email" placeholder="Masukkan email anda" />
        </div>

        <div class="form-group">
          <label for="password">Kata sandi:</label>
          <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/lock.png" alt="Lock" />
          <input type="password" id="password" placeholder="Masukkan kata sandi anda" />
          <img class="toggle-password" id="togglePassword1" src="images/Eye off.svg" alt="Show" onclick="togglePassword('password', 'togglePassword1')" />
        </div>

        <div class="form-group">
          <label for="confirm">Ulangi kata sandi:</label>
          <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/lock.png" alt="Lock" />
          <input type="password" id="confirm" placeholder="Masukkan kata sandi anda" />
          <img class="toggle-password" id="togglePassword2" src="images/Eye off.svg" alt="Show" onclick="togglePassword('confirm', 'togglePassword2')" />
        </div>

        <div class="checkbox-group">
          <input type="checkbox" id="termsCheckbox" />
          <label for="termsCheckbox">
            Saya setuju untuk <a href="#">Ketentuan Layanan</a> dan <a href="#">Kebijakan Privasi</a>
          </label>
        </div>

        <button type="submit">Daftar</button>

        <div class="bottom-links">
          Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </div>
      </form>

      <div class="footer-bar"></div>
    </div>
  </div>

  <script>
    function togglePassword(id, iconId) {
      const input = document.getElementById(id);
      const icon = document.getElementById(iconId);

      const eyeOpen = "images/Eye.svg";
      const eyeClosed = "images/Eye off.svg";

      if (input.type === "password") {
        input.type = "text";
        icon.src = eyeOpen;
      } else {
        input.type = "password";
        icon.src = eyeClosed;
      }
    }
  </script>
</body>
</html>