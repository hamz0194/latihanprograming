<?php
// pengulangan pada array
// for / foreach
$angka = [2, 3, 88, 746];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>latihan 2</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>
  <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <!-- count(untuk menghitung ada berapa jumlah elemen yang ada di dalam array) -->
    <div class="kotak"><?php echo $angka[$i]; ?></div>
  <?php } ?>

  <div clear="clear"></div>

  <?php foreach ($angka as $a) { ?>
    <!-- foreach artinya untuk setiap, untuk setiap elemen di dalam array lakukan sesuatu -->
    <!-- $a untuk mempresentasikan $angka ($books as $book) -->
    <div class="kotak"><?php echo $a; ?></div>
  <?php } ?>
  <div class="clear"></div>
  <?php foreach ($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>
</body>

</html>