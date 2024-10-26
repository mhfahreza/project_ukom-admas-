<?php
    include "koneksi.php";
 
    // Get id from URL to delete that user
    $nik = $_GET['nik'];
    
    // Delete user row from table based on given id
    if($result = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik=$nik"))
    {
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:manajemen_masyarakat.php");
    }

?>