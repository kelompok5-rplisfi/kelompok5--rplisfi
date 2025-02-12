<?php
    require 'koneksi.php';
    
    $id=$_GET['id'];
    $query="SELECT * FROM products WHERE id=$id";
    $result= mysqli_query($connect, $query);
    $show= mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Data</h1>

        <form action="edit_proses.php" method="POST">
            <input type="hidden" name="id" value="<?= $show['id'] ?>" />
            <div class="mb-3">
                <label for="namaproduk" class="form-label">Nama Produk</label>
                <input type="text" name="namaproduk" class="form-control" required value="<?= $show['namaproduk'] ?>">
            </div>

            <div class="mb-3">
                <label for="merek" class="form-label">Merek</label>
                <input type="text" name="merek" class="form-control" required value="<?= $show['merek'] ?>">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" required value="<?= $show['harga'] ?>">
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" required value="<?= $show['stok'] ?>">
            </div>

            <div class="mb-3">
                <label for="expired" class="form-label">Expired</label>
                <input type="date" name="expired" class="form-control" required value="<?= $show['expired'] ?>">
            </div>
            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>