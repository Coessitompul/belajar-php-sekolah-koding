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

  // =========== Associative Array ===========
  // key => isi
  // $data = [ 
  //   "nama" => "Coes Sitompul" , 
  //   "umur" => 21,
  //   "pekerjaan" => "Developer"
  // ] ;

  // $data2 = [ 
  //   "istri" => "belum ada" , 
  //   "laptop" => "dellsuperbook"
  // ] ;

  // print_r($data);

  // cara mengubah nilai dari associative array
  // $data['nama'] = "Coes Priandi Sitompul";
  // cara untuk cetak isi dari associative array
  // echo "Namanya adalah ". $data['nama'];

  // =========== Metode Associative Array ===========
  // array_values digunakan untuk memberi nomor-nomor indeks pada associative array
  // print_r(array_values($data));
  //  array-keys digunakan untuk mengembalikan key (kunci) dari array associative
  // print_r(array_keys($data));
  //  array_merge digunakan untu menggabungkan array, seberapa banyak pun array yang diiginkan karena tinggal hanya membuat tanda koma, dan menuliskan variabel array mana yang aan digabung
  // print_r(array_merge($data, $data2));

  //  =========== Array Multi dimensi ===========
    $data = [
      ["programmer", "21", "males"],
      ["designer", "24", "rajin"],
      ["manager", "34", "males banget"]
    ];

    // 00 01 02
    // 10 11 12
    // 20 21 22

    $data[2][0] = "Proyek Manager"; //contoh cara mengganti nilai didalam array
    echo $data[2][0]; // contoh cara mencetak hasil dari multi dimensi array



  ?>

</body>
</html>