<?php
    include "koneksi.php";

    $nik        = $_POST['nik'];
    $nama       = $_POST['nama'];
    $telp       = $_POST['telp'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql_update = "UPDATE `masyarakat` SET `nik`= '$nik' ,`nama`= '$nama' ,`username`= '$username',`password`= '$password',`telp`= '$telp' WHERE    nik= '$nik'";

    $eksekusi = mysqli_query($koneksi,$sql_update);

    if($eksekusi)
    {
        header("location:manajemen_masyarakat.php");
    }
    else
    {
        echo "error";
    }
?>