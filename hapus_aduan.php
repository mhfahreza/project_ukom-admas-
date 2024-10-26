<?php
    include "koneksi.php";
 
    // Get id from URL to delete that user
    $id = $_GET['id_pengaduan'];
    
    // Delete user row from table based on given id
    if($result = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan=$id"))
    {
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:dashboard.php");
    }

?>