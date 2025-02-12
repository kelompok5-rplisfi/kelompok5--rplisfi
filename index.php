<?php
    require 'koneksi.php';
$query="SELECT * FROM products";
$results= mysqli_query($connect, $query);
?>

<!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Praktikum</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      </head>
      <body>
        <h1>Tugas Praktikum</h1>
            <a href="tambah.php" class="btn btn-info">Tambah Data</a>

            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Merek</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Experied</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>

<?php
    if(mysqli_num_rows($results)>0){
                  
    $no=1;
    while($show= mysqli_fetch_assoc($results)){
    echo"
        <tr>
            <td>$no</td>
            <td>$show[namaproduk]</td>
            <td>$show[merek]</td>
            <td>$show[harga]</td>
            <td>$show[stok]</td>
            <td>$show[expired]</td>
            <td>
                <a href='detail.php?id=$show[id]' class= 'btn btn-info'>Detail</a>
                <a href='edit.php?id=$show[id]' class= 'btn btn-warning'>Edit</a>
                <form action='hapus_proses.php' method='POST' class='d-inline'>
                <input type='hidden' name='id' value='$show[id]'/>
                <button type='submit' class='btn btn-danger'>Hapus</button>
                </form>
            </td>
        </tr>
    ";
    $no++;
    }
    }else{
        echo"<div class='text-danger'>Data Tidak Ada</div>";
}
?>
                </tbody>
            </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
</html>