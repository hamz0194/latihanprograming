<?php
$mahasiswa = [
  ["Hamzah", "240194", "Sistem Informasi", "email"],
  ["ade", "300995", "Sistem Informasi", "email"],
  ["inul", "548416", "Sistem Informasi", "email"]

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>nama : <?= $mhs[0]; ?></li>
      <li>nrp : <?= $mhs[1]; ?></li>
      <li>jurasan : <?= $mhs[2]; ?></li>
      <li>email : <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>