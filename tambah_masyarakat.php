<?php
    include "koneksi.php";

    $nik          = $_POST['nik'];
    $nama         = $_POST['nama'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $telp         = $_POST['telp'];

    $sql    = "INSERT INTO masyarakat (nik, nama, username, password, telp) 
                VALUES ('$nik', '$nama', '$username', '$password', '$telp')";

    $eks    = mysqli_query($koneksi, $sql);

    if($eks)
    {
        header("location:manajemen_masyarakat.php");
    }
    else
    {
        echo "error";
    }
?>