<?php
$mahasiswa = [
  [
    "nama" => "Hamzah",
    "nrp" => "240194",
    "jurusan" => "Sistem Informasi",
    "email" => "email",
    "gambar" => "sandhika.jpeg"
  ],
  [
    "nama" => "Ade",
    "nrp" => "300995",
    "jurusan" => "Sistem Informasi",
    "email" => "email",
    "gambar" => "doddy.jpg"

  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>GET</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &email=<?= $mhs["email"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>">
          <?= $mhs["nama"]; ?></a>
      </li>
      <!-- metode request get adalah metode pengiriman data melalui url 
      dan data tersebut bisa diambil atau ditangkap oleh variabel superglobal $_GET -->
    <?php endforeach; ?>
  </ul>
</body>

</html>