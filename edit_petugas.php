<?php
        session_start();
        if(!empty($_SESSION['nik_login']))
        {
    
        include "header2.php";
        include "koneksi.php";
        include "function_tanggal.php";
    
    
            $nik_login = $_SESSION['nik_login'];
            $nama_login = $_SESSION['nama_login'];
            $level = $_SESSION['level'];

            $id_petugas   = $_GET['id_petugas'];
            $sql_petugas  = "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'";
            $eks_petugas  = mysqli_query($koneksi, $sql_petugas);
            $data_petugas = mysqli_fetch_array($eks_petugas);

?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>

    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="rounded bg-light">
            <div class="py-5 px-5">

                <divc class="card-header text-center ">
                    <h3>Detail Anggota</h3>
                </divc>

                <div class="card my-3" style="max-width: 1240px;">
                    <div class="row g-0 px-3 py-3">
                        <div class="col-md-4">
                            <img src="img_properti//pfp.jpg" class="img-fluid rounded mt-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form action="proses_edit_petugas.php" method="post">
                                    <div class="">
                                        <label for="exampleInputEmail1" class="form-label">Id Petugas</label>
                                        <input type="text" name="id_petugas" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" autocomplete="off"
                                            value="<?php echo $data_petugas['id_petugas']; ?>" readonly>
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                                        <input type="text" name="nama_petugas" class="form-control" id="exampleInputPassword1"
                                            autocomplete="off" value="<?php echo $data_petugas['nama_petugas']; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Telp</label>
                                        <input type="text" name="telp" class="form-control" id="exampleInputPassword1"
                                            autocomplete="off" value="<?php echo $data_petugas['telp']; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputPassword1"
                                            autocomplete="off"
                                            value="<?php echo $data_petugas['username']; ?>">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="" class="form-label">Level</label>
                                        <p>
                                            <select name="level" id="" class="form-control" required autocomplete="off">
                                                <option value="<?php echo $data_petugas['level']?>">level saat ini <?php echo $data_petugas['level']?></option>
                                                <option value="petugas">petugas</option>
                                                <option value="admin">admin</option>
                                            </select>
                                        </p>
                                    </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                        </form>
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