<?php
// $mahasiswa = [
//   ["Hamzah", "240194", "Sistem Informasi", "email"],
//   ["ade", "300995", "Sistem Informasi", "email"],
//   ["inul", "548416", "Sistem Informasi", "email"]

// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Hamzah",
    "nrp" => "240194",
    "jurusan" => "Sistem Informasi",
    "email" => "email",
    "gambar" => "sandhika.jpeg"
  ],
  [
    "nama" => "ade",
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
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src="img/<?= $mhs["gambar"]; ?>" alt=""></li>
      <li>nama : <?= $mhs["nama"]; ?></li>
      <li>nrp : <?= $mhs["nrp"]; ?></li>
      <li>jurasan : <?= $mhs["jurusan"]; ?></li>
      <li>email : <?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>