<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login RuangTenang</title>
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
      background: #fafafa; /* Changed from #ffffff to #fafafa */
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
      width: 300px; /* Changed from 250px to 300px */
      height: 300px; /* Changed from 250px to 300px */
    }

    .left h1 {
      font-size: 56px; /* Changed from 48px to 56px */
      color: #008080;
      margin-top: -40px; /* Adjusted margin-top */
      margin-bottom: 100px; /* Added margin-bottom */
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
      text-align: center; /* Added text-align: center */
    }

    .right p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    form {
      width: 100%;
      max-width: 400px; /* Changed from 500px to 400px */
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
      padding: 12px 40px 12px 45px; /* Adjusted padding for icons */
      font-size: 18px;
      border: 1px solid #000;
      border-radius: 12px;
      box-shadow: 0 4px 4px rgba(0,0,0,0.25);
    }

    .form-group img.icon {
      position: absolute;
      bottom: 14px;
      left: 12px;
      width: 22px;
      height: 22px;
      opacity: 0.6;
    }

    .form-group img.toggle-password {
      position: absolute;
      top: 13px;
      right: 12px;
      width: 22px;
      height: 22px;
      cursor: pointer;
      opacity: 0.6;
    }

    .password-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .password-row a {
      font-size: 16px; /* Changed from 14px to 16px */
      color: #007C91;
      text-decoration: none;
    }

    .checkbox-wrapper {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .checkbox-wrapper input {
      margin-right: 10px;
      transform: scale(1.3);
    }

    .checkbox-wrapper label {
      font-size: 16px;
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
      margin-top: 10px; /* Added margin-top */
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
      <a href="#" class="back-button">
        <img src="images/Back.svg" alt="Back" width="28" height="28">
      </a>
      <img class="logo" src="images/logo_rumah_aman__2_-removebg-preview 1.svg" alt="Logo RuangTenang" />
      <h1><span>Ruang</span><span>Tenang</span></h1>
    </div>
    <div class="right">
      <h2>Selamat Datang di RuangTenang!</h2>
      <p>Kami ada untukmu!</p>

      <form onsubmit="event.preventDefault(); alert('Login berhasil (dummy)!')">
        <div class="form-group">
          <label for="email">Email:</label>
          <img src="https://img.icons8.com/ios-filled/50/000000/email.png" class="icon" alt="Email Icon" />
          <input type="email" id="email" placeholder="Masukkan email anda" required />
        </div>

        <label for="password" style="margin-top: 15px;">Kata sandi:</label>
        <div class="form-group">
          <img src="https://img.icons8.com/ios-filled/50/000000/lock.png" class="icon" alt="Lock Icon" />
          <input type="password" id="password" placeholder="Masukkan kata sandi anda" required />
          <img class="toggle-password" id="toggleEye" src="images/Eye off.svg" alt="Toggle" onclick="togglePassword()" />
        </div>
        <div class="password-row">
          <div class="checkbox-wrapper">
            <input type="checkbox" id="remember" />
            <label for="remember">Ingat saya</label>
          </div>
          <a href="#">Lupa kata sandi?</a>
        </div>

        <button type="submit">Masuk</button>

        <div class="bottom-links">
          Belum punya akun? <a href="#">Daftar disini</a>
        </div>
      </form>

      <div class="footer-bar"></div>
    </div>
  </div>

  <script>
    function togglePassword() {
      const password = document.getElementById("password");
      const eyeIcon = document.getElementById("toggleEye");

      const eyeOpen = "images/Eye.svg";
      const eyeClosed = "images/Eye off.svg";

      if (password.type === "password") {
        password.type = "text";
        eyeIcon.src = eyeOpen;
      } else {
        password.type = "password";
        eyeIcon.src = eyeClosed;
      }
    }
  </script>
</body>
</html>