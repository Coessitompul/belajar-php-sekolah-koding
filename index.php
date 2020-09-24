<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>
  
  <?php 
  /*
    Beberapa baris 
    komentar yang bisa anda tambahkan 
    sendiri
  */

  // variabel pada php
  // kita tidak boleh  menggunakan angka terlebih dahulu untuk membuat variabel, tetapi harus menggunakan huruf, kemudian jika perlu bisa anda gunakan angka untuk menambahkan variabel yang anda mulai dengan huruf kemudian bisa dilanjutan dengan angka jika diperlukan.
    $nama  = "Sekolah Koding";
    $nama2 = "Bermain Koding";
    echo "Selamat datang di $nama <br>";

    // tipe data angka/number
    // 1. Integer tidak menggunakan koma
    // 2. Float pemisahan angka berkoma ditandai dengan titik (100.123) bukan (100,123 = salah)

    $angka = 1000;
    $angka2 = 100.123;

    echo "Hasil dari $angka + $angka2 adalah ". ($angka + $angka2);

  ?>

</body>
</html>