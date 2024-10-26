<?php
    include "koneksi.php";
 
    // Get id from URL to delete that user
    $id = $_GET['id_password'];
    
    // Delete user row from table based on given id
    if($result = mysqli_query($koneksi, "DELETE FROM lupa_password WHERE id_password=$id"))
    {
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:tampil_lupa_password.php");
    }

?>