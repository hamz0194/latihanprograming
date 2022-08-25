<?php
require 'function.php';

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FORM `mahasiswa` WHERE id = $id");
var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/sandhika.jpeg"></li>
    <li>NRP : 1235240194</li>
    <li>Nama : Moch Hamzah Adytiya</li>
    <li>Email : ham.adytiya@gmail.com</li>
    <li>Jurusan : Sistem Informasi</li>
    <li><a href="">Edit</a> | <a href="">Delete</a></li>
    <li><a href="latihan3.php">Back</a></li>
  </ul>
</body>

</html>