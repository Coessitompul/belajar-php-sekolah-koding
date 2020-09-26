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

  $hewan = ["Anjing", "Domba", "Kelinci", "Gorilla"];  
  for($i = 0; $i < count($hewan); $i++) {
    echo "======";
    echo $hewan[$i];
    echo "====== <br>";
  }

  ?>
</body>
</html>