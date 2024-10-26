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

            $id_masyarakat   = $_GET['nik'];
            $sql_masyarakat  = "SELECT * FROM masyarakat WHERE nik = '$id_masyarakat'";
            $eks_masyarakat  = mysqli_query($koneksi, $sql_masyarakat);
            $data_masyarakat = mysqli_fetch_array($eks_masyarakat);

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
                            <img src="img_properti//pfp.jpg" class="img-fluid rounded mt-3"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form>
                                    <div class="">
                                        <label for="exampleInputEmail1" class="form-label">Nik</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" disabled placeholder="<?php echo $data_masyarakat['nik']; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" disabled 
                                        placeholder="<?php echo $data_masyarakat['nama']; ?>" >
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Telp</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" disabled 
                                        placeholder="<?php echo $data_masyarakat['telp']; ?>" >
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" disabled 
                                        placeholder="<?php echo $data_masyarakat['username']; ?>" >
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" disabled 
                                        placeholder="<?php echo $data_masyarakat['password']; ?>" >
                                    </div>
                                </form>
                            </div>
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