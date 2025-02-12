<?php
    $id= $_GET['id'];
    require 'koneksi.php';

    $query="SELECT * FROM products WHERE id= $id";
    $result= mysqli_query($connect, $query);       
    $show= mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Detail Data</Details></h1>

        <div>Nama Produk: <?=$show["namaproduk"]?></div>
        <div>Merek: <?=$show["merek"]?></div>
        <div>Harga: <?=$show["harga"]?></div>
        <div>Stok: <?=$show["stok"]?></div>
        <div>Expired: <?=$show["expired"]?></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>