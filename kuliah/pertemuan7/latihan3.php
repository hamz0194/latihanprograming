<!DOCTYPE html>
<html lang="en">

<head>

  <title>Post</title>
</head>

<body>
  <?php
  if (isset($_POST["submit"])) : ?>
    <h1>Halo, Selamat datang <?= $_POST["nama"]; ?></h1>
  <?php endif; ?>
  <form action="" method="POST">
    <!-- action berfungsi mengirimkan data ke halaman manapun sesuai inputan
    jika kosong data akan di kirimkan ke halaman/ file ini sendiri -->
    Masukkan Nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim</button>
  </form>
</body>

</html>