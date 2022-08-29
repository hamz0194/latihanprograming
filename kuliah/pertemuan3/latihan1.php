<?php
// Pengulangan
// for
// while
// do.. while
// foreach : Pengulangan khusus array
###################################
// for ($i = 0;/* $i adalah indeks/nilai awal */ $i < 5 /*kondisi terminasi/mau berapa kali pengulangan */; $i++/*untuk menambahkan nilai pengulangan sampai nilai false */) {
// for ($i=0; $i < 5; $i++) { 
//   echo "Hello World! <br>";
// }
###################################
// jika i bernilai false tidak akan menampilkan apapun
// $i = 0;
// while ($i < 5) {
//   echo "Hello World! <br>";
//   $i++; //jangan lupa untuk menambahkan incremen agar nilai index bertambah hingga hasil false
// }
###################################
// jika i bernilai false tetap akan menampilkan echo/hasil 1x
// $i = 0;
// do {
//   echo "Hello World! <br>";
//   $i++;
// } while ($i < 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
  <style>
    .warna_baris {
      background-color: aqua;
    }
  </style>
</head>

<body>
  <table border="1" cellpading="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i %  2 == 0) : ?>
        <!-- % = sisa hasil bagi, jika == 1 untuk menentukan ganjil, jika 0 untuk menentukan genap-->
        <tr class="warna_baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= /* = pengganti php echo */ "$i,$j" ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
  </table>
</body>

</html>