<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Masuk</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="<?php echo base_url(); ?>./assets/css/style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Masuk</header>
      <form action="<?php echo site_url('user/member/login'); ?>" method="POST">
        <input type="email" name="email" placeholder="Masukkan Email Anda" required>
        <input type="password" name="password" placeholder="Masukkan kata sandi" required>
        <a href="#">Lupa password?</a>
        <!-- Ganti type="button" menjadi type="submit" -->
        <input type="submit" class="button" value="Masuk">
      </form>
      <div class="signup">
        <span class="signup">Belum punya akun?
         <a href="<?php echo site_url('user/member/registrasi'); ?>">Daftar</a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
