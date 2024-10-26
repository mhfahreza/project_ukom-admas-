<?php
    session_start();
    include "koneksi.php";

    $id_pengaduan       = $_POST['id_pengaduan'];
    $status             = $_POST['status'];
    $tanggal_tanggapan  = date('Y-m-d');
    $id_petugas         = $_SESSION['nik_login'];

    if($status == 'diverifikasi')
    {
        $narasi = "status pekerjaan diubah ke peninjauan";
    }
    else if($status == "diproses")
    {
        $narasi = "status pekerjaan diubah ke proses";
    }
    else if($status == "selesai")
    {
        $narasi = "status pekerjaan telah selesai";
    }
    else if($status == "tidak valid")
    {
        $narasi = "aduan tidak valid";
    }


    $sql_update_status = "UPDATE pengaduan SET status = '$status' WHERE id_pengaduan = '$id_pengaduan'";
    $eksUpdateStatus   = mysqli_query($koneksi, $sql_update_status);

    if($eksUpdateStatus)
    {
        $sql_tanggapan      = "INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)
        VALUES (NULL, '$id_pengaduan', '$tanggal_tanggapan', '$narasi', '$id_petugas')";

        $eks_sql_tanggapan  = mysqli_query($koneksi, $sql_tanggapan);

        if($eks_sql_tanggapan)
        {
            header("location:pengaduan_detail.php?id_pengaduan=$id_pengaduan");
        }
    }
    else
    {
        echo "update gagal";
    }
?>