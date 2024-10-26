<?php

    session_start();
    include "koneksi.php";

   
    $username    = $_POST['username'];
    $password    = $_POST['password'];

    $sqlLogin    = "SELECT * FROM masyarakat WHERE username = '$username' and password = '$password'";
    $eksLogin    = mysqli_query($koneksi, $sqlLogin);
    $ketemu      = mysqli_num_rows($eksLogin);

    if($ketemu>0)
    {
        //echo "sesuai";
        $data       = mysqli_fetch_array($eksLogin);
        $nik        = $data['nik'];
        $nama       = $data['nama'];
        $username   = $data['username'];
        $password   = $data['password'];
        $telp       = $data['telp'];

        $_SESSION['nik_login']  = $nik;
        $_SESSION['nama_login'] = $nama;
        $_SESSION['username']   = $username;
        $_SESSION['password']   = $password;
        $_SESSION['telp_login'] = $telp;
        $_SESSION['level']      = 'masyarakat';

        header("location:dashboard.php");
    }
    else
    {
        $sqlLoginPetugas    = "SELECT * FROM petugas WHERE username = '$username' and password = '$password'";
        $eksLoginPetugas    = mysqli_query($koneksi, $sqlLoginPetugas);
        $ketemuPetugas      = mysqli_num_rows($eksLoginPetugas);

        if($ketemuPetugas>0)
        {
            $dataPetugas    = mysqli_fetch_array($eksLoginPetugas);
            $idPetugas      = $dataPetugas['id_petugas'];
            $namaPetugas    = $dataPetugas['nama_petugas'];
            $username       = $dataPetugas['username'];
            $password       = $dataPetugas['password'];
            $telp           = $dataPetugas['telp'];
            $level          = $dataPetugas['level'];
    
            $_SESSION['nik_login']          = $idPetugas;
            $_SESSION['nama_login']         = $namaPetugas;
            $_SESSION['username']           = $username;
            $_SESSION['password']           = $password;
            $_SESSION['telp_login']         = $telp;
            $_SESSION['level']              = $level;

            header("location:dashboard.php");
        }
        else
        {
            header("location:form_login.php");
        }
    }
?>