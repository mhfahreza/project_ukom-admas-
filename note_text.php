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
        <title>SIMB</title>
        <style>
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
        </style>
</head>

<body style="background-image:url('img_properti/bgdash2.avif'); background-size: cover;">

        <!-- form login -->
        <div class="container">
                <div class="container">
                        <form>
                                <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                                else.</div>
                                </div>
                                <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                </div>
                                <form action="tambah_masyarakat.php" method="POST">
                                        <div class="modal-body">
                                                <div class="form-group">
                                                        <label for="" class="form-label">Nik</label>
                                                        <input type="text" name="nik" class="form-control" required
                                                                autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                        <label for="" class="form-label">Nama</label>
                                                        <input type="text" name="nama" class="form-control" required
                                                                autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                        <label for="" class="form-label">Nomor telepon</label>
                                                        <input type="text" name="telp" class="form-control" required
                                                                autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                        <label for="" class="form-label">username</label>
                                                        <input type="text" name="username" class="form-control" required
                                                                autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                        <label for="" class="form-label">password</label>
                                                        <input type="password" name="password" class="form-control"
                                                                required autocomplete="off">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">tutup</button>
                                                <button type="submit" class="btn btn-primary">Buat Akun</button>
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