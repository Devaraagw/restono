<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi</title>

  <!---Custom CSS File--->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"> <!-- perbaikan pada base URL -->

</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Registrasi</header>
        <form action="<?php echo base_url('user/member/registrasi'); ?>" method="post">
          <input type="email" name="email" placeholder="Masukkan email anda" required> <!-- tambahkan atribut name -->
          <input type="password" name="password" placeholder="Buat kata sandi" required> <!-- tambahkan atribut name -->
          <input type="password" name="confirm_password" placeholder="Konfirmasi kata sandi" required> <!-- tambahkan atribut name -->
          <input type="submit" class="button" value="Daftar"> <!-- ubah type dari button ke submit -->
        </form>
      <div class="signup">
        <span class="signup">Sudah punya akun?
         <a href="<?php echo site_url('user/member/login'); ?>">Masuk</a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
