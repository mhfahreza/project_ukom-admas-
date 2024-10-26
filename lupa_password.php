<?php

    include "koneksi.php";

    $info   = $_POST['info'];
    $level  = $_POST['level'];
    $password = $_POST['password'];
    
    $sql ="INSERT INTO `lupa_password`(`id_password`, `info_akun`, `level`, `password_baru`) VALUES (NULL,'$info','$level','$password')";

    $eksekusi = mysqli_query($koneksi, $sql);

    if($eksekusi)
    {
        header("location:index.php");
    }
    else
    {
        echo "error";
    }

?>