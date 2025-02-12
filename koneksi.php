<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="kelompok1_toko";
    
    $connect= mysqli_connect($host, $user, $pass, $db);

    if (!$connect) {
        die("Koneksi Gagal" . mysqli_connect_error());  
}
?>