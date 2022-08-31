<?php
// cek apakah tidak ada data di $_GET
// untuk mengamankan data agar tidak bisa langsung mengakses Detail mahasiswa/latihan2.php
if (
  !isset($_GET["nama"]) ||
  !isset($_GET["nrp"]) ||
  !isset($_GET["jursan"]) ||
  !isset($_GET["email"]) ||
  !isset($_GET["gambar"])
) {
  // fungsi ! adalah tidak/not
  // redirect
  header("Location: latihan1.php");
  // header adalah function untuk memindahkan ke halaman yang dituju
  exit;
  // exit adalah function yang di gunakan untuk menyelsaikan code diatas dan mengabaikan code dibawahnya

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail Mahasiswa</title>
</head>

<body>
  <ul>
    <li><img src="img/<?= $_GET["gambar"]; ?> "></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
  </ul>
  <a href="latihan1.php">Back</a>
</body>

</html>