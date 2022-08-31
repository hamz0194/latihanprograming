<?php
// Variabel scope / lingkup variabel
// $x = 10; // variabel lokal
// function tampilx()
// {
//   global $x;
//   // variabel global, memanggil variabel lokal 
//   // (karena di dalam funciton tidak bisa memanggil, 
//   // variabel lokal atau variabel yang ada di luar function)
//   echo $x;
// }
// tampilx();
?>
<?php
// SUPERGLOBALS
// Variabel global milik php
// Merupakan Array Associative
// ($_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV/ENVIRONMENT)
// var_dump($_GET);
?>
<?php
$_GET["nama"] = "Hamzah Adytiya";
$_GET["nrp"] = "300995";

var_dump($_GET);
?>