<?php

    include "koneksi.php";

    $id_aduan   = $_POST['id_pengaduan'];
    $isi_pengaduan  = $_POST['isi_laporan'];
    $tempat_kejadian   = $_POST['tempat_kejadian'];

    $sql    = "UPDATE `pengaduan` SET `id_pengaduan`='$id_aduan',`isi_laporan`='$isi_pengaduan', `tempat_kejadian`= '$tempat_kejadian' WHERE id_pengaduan = '$id_aduan'";

    $eks = mysqli_query($koneksi, $sql);

    if($eks)
    {
        header("location:dashboard.php");
    }
    else
    {
        echo "error";
    }

?>