<?php

    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "simb";

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if($koneksi){
       // echo " berhasil";
    }
    else{
        //echo "gagal";
    }

?>