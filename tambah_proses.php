<?php
    require "koneksi.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $namaproduk=htmlspecialchars($_POST["namaproduk"]);
        $merek=htmlspecialchars($_POST["merek"]);
        $harga=htmlspecialchars($_POST["harga"]);
        $stok=htmlspecialchars($_POST["stok"]);
        $expired=htmlspecialchars($_POST["expired"]);
    
    }
     
        $query="INSERT INTO products(namaproduk, merek, harga, stok, expired) VALUES ('$namaproduk','$merek','$harga','$stok','$expired')";
        $result= mysqli_query($connect, $query);

        if($result){
        echo"<meta http-equiv='refresh' content='1;url=index.php'>";
        }else{
        echo mysqli_error($connect);
    }
   
mysqli_close($connect);
?>