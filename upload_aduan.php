<?php
    session_start();
    error_reporting(0);

    include "koneksi.php";

    $nik_login = $_SESSION['nik_login'];
    $tanggal   = date("Y-m-d");

    $isi_laporan        = $_POST['isi_laporan'];
    $tempat_kejadian    = $_POST['tempat_kejadian'];
    $filename_tmp       = $_FILES['foto']['tmp_name'];
    $nama_file_lama     = $_FILES['foto']['name'];
    $ekstensi_file      = end(explode('.',$nama_file_lama));

    $nama_file_baru = $nik_login."_".date("Ymd_His").".".$ekstensi_file; 
    $folder_up = "img_aduan/";

    $unggah = move_uploaded_file($filename_tmp, $folder_up.$nama_file_baru);
    if($unggah)
    {
        //echo "berhasi";
        $sql_laporan = "INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `tempat_kejadian`, `foto`, `status`) VALUES (NULL, '$tanggal', '$nik_login', '$isi_laporan', '$tempat_kejadian', '$nama_file_baru', 'diverifikasi');";

        $eks_laporan = mysqli_query($koneksi, $sql_laporan);

        if($eks_laporan)
        {
            header("location:dashboard.php");
        }
    }
?>