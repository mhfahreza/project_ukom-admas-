<?php
        session_start();
        if(!empty($_SESSION['nik_login']) AND ($_SESSION['level'] == "masyarakat"))
        {
    
        include "header2.php";
        include "koneksi.php";
        include "function_tanggal.php";
    
    
            $nik_login = $_SESSION['nik_login'];
            $nama_login = $_SESSION['nama_login'];
            $level = $_SESSION['level'];

?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>

    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="rounded bg-light">
            <div class="py-5 px-5">

                <div class="card my-3" style="max-width: 1240px;">
                    <div class="px-3 py-3">
                        <div class="card-header text-center">
                            <h3>Form Tambah Aduan</h3>
                        </div>
                        <div class="card-body">
                            <form action="upload_aduan.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group my-3">
                                    <label for="" class="form-label">apa keluhan anda?</label>
                                    <textarea name="isi_laporan" class="form-control" id="ckeditor"required></textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="form-label">tempat kejadian (*Alamat berupa nama jalan atau daerah)</label>
                                    <textarea name="tempat_kejadian" class="form-control" required></textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="form-label">unggah foto Aduan</label>
                                    <p>
                                        <input type="file" name="foto" class="form-control" required>
                                    </p>
                                </div>
                                <button class="btn btn-primary my-2">tambahkan aduan</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
    include "footer2.php";
    }
    else
    {
        header("location:form_login.php");
    }
?>