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

  // ========== pengulangan ==========
  // for(variabel awal(mulai); batas(syarat); perubahan)
  // for($i = 6; $i > 0; $i--) {
  //   // echo "Sekolah Koding <br>";    
  //   // echo "* ". $i . "<br> ";    
  //   for($a = 1; $a < $i; $a++) {
  //     echo "&nbsp";
  //   }
  //   for($j = 6; $j >= $i; $j--) {            
  //     echo "*";
  //   }    
  //   echo "<br>";
  // }

    
    for($i = 4; $i >= 0 ; $i--) {

      for($j = 0; $j <= $i; $j++) {
        echo "&nbsp";
        // *****
        // ****
        // *****
        // ****
      }
      for($k = 4; $k >= $i; $k--) {
        echo "#";
        // #####
      }

      echo "<br>";
    }  
      /* logikannya adalah bahwa perulangan bintang itu akna terus dilakukan, selama angka yang dimasukkan belum mencapai batas yang sudah ditentukan
      contoh : 
      for($i = 0; $i < 5; $i++) {
        for($j = $i; $j < 5; $j++) {
          echo "*";          
        }
      }

      ketika $i = 0, kemudian di cek apakah 0 < 5 jika benar akan dilanjutkan ke block kode selanjutnya, kemudian masu keperulangan kedua, $j = $i (yang mana $i disini bernilai 0) kemudian cek apakah 0 < 5 jika benar akan dilanjutkan dengan perulangan untuk mencetak bintang sebanyak 5 dalam satu baris. kemudian setelah selesai mencetak 5 bintang. maka akan keluar dari perulangan tersebut, kemudian masuk lagi ke perulangan pertama yang mana nilai dari $i disini sekarang sudah menjadi 1 karena ada increment $++, kemudian di cek apakah 1 lebih kecil dari 5 jika iya maka akan dilanjutkan ke block kode selanjutnya, kemudian masuk ke perulangan kedua lagi, $j = $i (yang mana sekarang $i sudah bernilai 1), maka perulangan tersebut akan mengulangi program mencetak bintang sebanyak perulangan yang sudah ditentukan panjangnya.

      NB :  didalam perhitungan perulangan index selalu di mulai dari angka 0


      */






  ?>
</body>
</html>