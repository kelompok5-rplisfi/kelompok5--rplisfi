<?php

    require 'koneksi.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $id= $_POST['id'];
    $namaproduk= $_POST['namaproduk'];
    $merek= $_POST['merek'];
    $harga= $_POST['harga'];
    $stok= $_POST['stok'];
    $expired= $_POST['expired'];

    $query="UPDATE products SET namaproduk='$namaproduk',merek='$merek',harga='$harga',stok='$stok', expired='$expired' WHERE id= $id ";

    if (mysqli_query($connect, $query)) {

        echo"<meta http-equiv='refresh' content='1;url=index.php'>";
    }else{

    echo mysqli_error($connect);
    echo"<meta http-equiv='refresh' content='5;url=edit.php?id=$id'>";
    }
}
mysqli_close($connect);
?>  