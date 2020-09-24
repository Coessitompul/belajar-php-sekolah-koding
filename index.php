<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>

  <h1>Array PHP</h1>

  <?php 

  // ========== tipe data array ==========
  $angka = [12, 42, 3, 1, 56];
  $kotak = array('anjing', 'kura-kura', 'koala', 'anjing');
  $nama = ['Hilman', 'Endy', 'Tiqa'];
  //print_r($kotak); //print_r() bisa digunakan untuk memprint array
  // echo $kotak[0];
  // echo $nama[2];

  // ========== metode array ==========
  // array_unique = digunakan untuk menampilkan yang unik saya, jika ada kaa yang berulang, maka hanya akan ditampilkan sekali saja
  // array_reverse = digunakan untuk membalik nilai array 
  /* shuffle = digunakan membuat random nilai yang ada di dalam array, tetapi suffle ini harus dilakukan sebelum di print(cetak) 
  Contoh: coba jalankan programn di bawah ini
    shuffle($kotak);
    print_r( $kotak );
  */

  // count = digunakan untuk menguji berapa isi dari array kita 
  // echo count($kotak);

  //  sort = digunakan untuk mengurutkan isi array sesuai kalimat, jika isi array adalah number, maka akan diurutkan berdasarkan angka yang terkecil. penggunaan sort sama dengan shuffle, sama-sama digunakan diawal sebelum di nilai-nya dicetak
  // sort($kotak);
  // print_r($kotak);
  // sort($angka);
  // print_r(array_reverse($angka));

  




  ?>

</body>
</html>