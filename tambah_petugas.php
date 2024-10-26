<?php
    include "koneksi.php";

    $nama_petugas = $_POST['nama_petugas'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $telp         = $_POST['telp'];
    $level        = $_POST['level'];

    $sql    = "INSERT INTO petugas (id_petugas, nama_petugas, username, password, telp, level) 
                VALUES (NULL, '$nama_petugas', '$username', '$password', '$telp', '$level')";

    $eks    = mysqli_query($koneksi, $sql);

    if($eks)
    {
        header("location:manajemen_petugas.php");
    }
?>