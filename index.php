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
  // ========= Perulangan ==========

  $hewan = ["Anjing", "Domba", "Kelinci", "Gorilla", "Lombu Aek"];  
  // for($i = 0; $i < count($hewan); $i++) {
  //   echo "======";
   //   echo $hewan[$i];
  //   echo "====== <br>";
  // }

  // ===== foreach() =====
  foreach($hewan as $hwn) {
    echo "====== ";
    echo $hwn;
    echo " ====== <br>";
  }

  ?>
</body>
</html>