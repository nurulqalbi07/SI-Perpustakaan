<?php 
    //membuat koneksi database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'db_perpustakaan';

    $conn =mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Eror : '.mysqli_connect_error($conn);
    }
?>