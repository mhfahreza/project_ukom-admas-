<?php
    include "koneksi.php";

    $nik        = $_POST['nik'];
    $nama       = $_POST['nama'];
    $telp       = $_POST['telp'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql_update = "UPDATE `petugas` SET `id_petugas`='$nik',`nama_petugas`='$nama',`username`='$username',`password`='$password',`telp`='$telp' WHERE id_petugas = '$nik'";

    $eksekusi = mysqli_query($koneksi,$sql_update);

    if($eksekusi)
    {
        header("location:logout.php");
    }
    else
    {
        echo "error";
    }
?>