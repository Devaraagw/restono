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
      <form action="#">
        <input type="email" placeholder="Masukkan Email Anda">
        <input type="password" placeholder="Masukkan password">
        <a href="#">Lupa password?</a>
        <input type="button" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Belum punya akun?
         <label for="check">Sign up</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>