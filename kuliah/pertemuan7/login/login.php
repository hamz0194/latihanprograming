<?php
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
  // cek Username & Password
  if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman login
    header("Location:admin.php");
    exit;
  } else {
    $error = true;
  }
  // jika salah, tampilkan pesan kesalahan
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login</title>
</head>

<body>
  <h1>Login Admin</h1>

  <?php if (isset($error)) : ?>
    <p style="color:red; font-style:italic">Username / Password anda salah !</p>
  <?php endif; ?>

  <ul>
    <form action="" method="POST">
      <li>
        <label for="username">Username : </label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
      </li>
      <button type="submit" name="submit">Login</button>
    </form>
  </ul>

  </form>
</body>

</html>