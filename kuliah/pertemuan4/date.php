<?php 
// Date
// Untuk Menampilkan tanggal dengan format tertentu
  // echo date("l, d-M-Y"); 
  // l = menampilkan hari apa saat mencoba
  // d = menampilakn tanggal brp kita saat mencoba
  // M = menampilkan Bulan apa saat mencoba (bulan dalam huruf)
  // m = menampilkan bulan brp saat mencoba (bulan dalam angka)
  // Y = menampilkan tahun brp saat mencoba
  // https://www.php.net/manual/en/funcref.php atau bisa cek di function liberary

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
  // echo Time();
  // echo date("l", time()-60*60*24*100);
  // echo date("d M Y", time()+60*60*24*100);
  // +menentukan hari apa setelah 100 hari, -menentukan hari apa sebelum 100 hari
  // +60(detik)*60(menit)*24(jam)*100(hari)

// mktime 
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,24,1994));

// strtotime (menggunakan string)
echo date("l", strtotime("24 January 1994"));
?>