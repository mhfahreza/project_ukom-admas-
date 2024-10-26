<?php

    session_start();
    if(empty($_SESSION['nik_login']))
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img_properti/simb3-removebg-preview.png" type="image/x-icon">
    <title>SIMB</title>
    <!-- <style>
        .container {
            width: 30%;
            margin-top: 10%;
            box-shadow: 0 3px 20px;
            padding: 30px;
        }

        .btn {
            width: 48%;
        }

        .jarak_form {
            margin-top: 10px;
            margin-bottom: 5px;
        }
    </style> -->
</head>

<body style="background-image:url('img_properti/bgdash2.avif'); background-size: cover;">

    <!-- form login -->
    <div class="container-fluid position-relative py-5 px-5">
        <div class="container bg-light rounded mt-5 py-5 px-5" style="max-width: 480px;">
            <h2 class="text-center">form login SIMB</h2>
            <hr>
            <form action="proses_login.php" method="POST">
                <div class="form-group jarak_form">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="masukkan username"
                        autocomplete="off">
                </div>
                <div class="form-group jarak_form">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="masukkan password"
                        autocomplete="off">
                </div>
                <div class="">
                    <a href="" data-bs-toggle="modal" class="" data-bs-target="#formtambahmasyarakat">
                        <small>Daftar akun baru</small>
                    </a>
                    <a href="" data-bs-toggle="modal" class="ms-3" data-bs-target="#formlupapassword">
                        <small>Lupa password</small>
                    </a>
                </div>
                <br>
                <div class="row">
                    <a href="index.php" class="btn btn-outline-danger col me-1">Halaman Utama</a>
                    <button type="submit" class="btn btn-outline-primary col ms-1">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="formtambahmasyarakat" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">DAFTAR AKUN BARU</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="tambah_masyarakat.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-label">Nik</label>
                            <input type="text" name="nik" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Nomor telepon</label>
                            <input type="text" name="telp" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">username</label>
                            <input type="text" name="username" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">password</label>
                            <input type="password" name="password" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                        <button type="submit" class="btn btn-primary">Buat Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="formlupapassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">FORM LUPA PASSWORD</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="lupa_password.php" method="POST">
                    <div class="modal-body">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                <h5>Estimasi pergantian password adalah 1-2 hari kerja maksimal 3 hari, mohon pengertiannya terimakasih.</h5>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <label for="" class="form-label">informasi akun (id/nik, nama, nomor telpon,
                                username)</label>
                            <input type="text" name="info" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group my-2">
                            <label for="" class="form-label">level akun</label>
                            <select class="form-select" name="level" aria-label="Default select example">
                                <option value="masyarakat">masyarakat</option>
                                <option value="petugas">petugas</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="" class="form-label">password baru</label>
                            <input type="password" name="password" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
<?php
    }
    else
    {
        header("location:dashboard.php");
    }
?>