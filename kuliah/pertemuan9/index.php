<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Halaman Admin!</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td>
          <a href="">Edit</a> |
          <a href="">Delete</a>
        </td>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>

  </table>
</body>

</html>