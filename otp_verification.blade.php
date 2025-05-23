<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verifikasi OTP | RuangTenang</title>
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
      background: #ABD2CD; /* Warna hijau muda */
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

    .left .otp-icon {
      width: 300px;
      height: 300px;
      margin-bottom: 20px;
    }

    .left h1 {
      font-size: 48px;
      color: #3a3a3a;
      margin-bottom: 10px;
      text-align: center;
    }

    .left p {
      font-size: 20px;
      color: #3a3a3a;
      text-align: center;
      max-width: 300px;
    }

    .right {
      flex: 1;
      background: #fafafa; /* Warna putih */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-bottom: 100px;
      text-align: center;
      position: relative;
    }

    .right h2 {
      font-size: 32px;
      font-weight: normal;
      margin-bottom: 30px;
      text-align: center;
    }

    .form-group {
      position: relative;
      margin-bottom: 30px;
      width: 100%;
      max-width: 800px;
    }

    input[type="email"],
    input[type="text"] {
      width: 100%;
      padding: 12px 40px 12px 45px;
      font-size: 18px;
      border: 1px solid #000;
      border-radius: 12px;
      box-shadow: 0 4px 4px rgba(0,0,0,0.25);
    }

    .form-group img.icon {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      width: 22px;
      height: 22px;
      opacity: 0.6;
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
      max-width: 400px;
      margin-top: 10px;
    }

    .footer-bar {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background: #D9E6E2;
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
        <img src="{{ asset('images/Back.svg') }}" alt="Back" width="28" height="28">
      </a>
<img class="otp-icon" src="{{ asset('images/OTP.svg') }}" alt="OTP Icon" />      <h1>OTP Verifikasi</h1>
      <p>Kami akan mengirimkan One Time Password pada nomor ponsel ini</p>
    </div>

    <div class="right">
      <form action="{{ route('otp.send') }}" method="POST">
        @csrf
        <h2>Masukkan Alamat Email</h2>

        <div class="form-group">
          <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/email.png" alt="Email" />
          <input type="email" id="email" name="email" placeholder="Masukkan email anda" required />
        </div>

        <button type="submit">Dapatkan OTP</button>
      </form>

      <div class="footer-bar"></div>
    </div>
  </div>
</body>
</html>