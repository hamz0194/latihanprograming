<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_1235240194');
}

function query($query)
{
  $conn = koneksi(); //koneksi

  $result = mysqli_query($conn, $query); //query

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
