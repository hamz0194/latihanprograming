<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// untuk mengecek data yang diambil dari table benar atau tidak
if (!$result) {
  echo mysqli_error($conn);
}

// ambil data (fetch) mahasiswa dari object result
// terdapat 4 cara untuk mengambil data:
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative/berupa string dari isi table
// mysqli_fetch_array() //mengembalikan keduanya, diatas
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs["nama"]);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
    <?php endwhile; ?>

  </table>
</body>

</html>