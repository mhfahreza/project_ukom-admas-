<?php
    include "koneksi.php";

    $id_petugas         = $_POST['id_petugas'];
    $nama_petugas       = $_POST['nama_petugas'];
    $telp               = $_POST['telp'];
    $username           = $_POST['username'];
    $level              = $_POST['level'];

    $sql_update = "UPDATE `petugas` SET `id_petugas`= '$id_petugas',`nama_petugas`= '$nama_petugas',`username`= '$username',`telp`= '$telp',`level`= '$level' WHERE `id_petugas`= '$id_petugas'";

    $eksekusi = mysqli_query($koneksi,$sql_update);

    if($eksekusi)
    {
        header("location:manajemen_petugas.php");
        // echo "berhasil";
    }
    else
    {
        echo "error";
    }
?>