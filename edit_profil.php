<?php
        session_start();
        if(!empty($_SESSION['nik_login']))
        {
    
        include "header2.php";
        include "koneksi.php";
        include "function_tanggal.php";
    
    
            $nik_login          = $_SESSION['nik_login'];
            $nama_login         = $_SESSION['nama_login'];
            $level              = $_SESSION['level'];
            $telp               = $_SESSION['telp_login'];
            $username           = $_SESSION['username'];
            $password           = $_SESSION['password'];
            
            if($level == 'masyarakat')
            {
                $sql_peng_all = "SELECT * FROM pengaduan WHERE nik = '$nik_login' order by id_pengaduan DESC";
                $eks_peng_all = mysqli_query($koneksi, $sql_peng_all);
                $jml_peng_all = mysqli_num_rows($eks_peng_all);
    
                $sql_peng_vrf = "SELECT * FROM pengaduan WHERE nik = '$nik_login' and status = 'diverifikasi'";
                $eks_peng_vrf = mysqli_query($koneksi, $sql_peng_vrf);
                $jml_peng_vrf = mysqli_num_rows($eks_peng_vrf);
    
                $sql_peng_pros = "SELECT * FROM pengaduan WHERE nik = '$nik_login' and status = 'diproses'";
                $eks_peng_pros = mysqli_query($koneksi, $sql_peng_pros);
                $jml_peng_pros = mysqli_num_rows($eks_peng_pros);
    
                $sql_peng_selesai = "SELECT * FROM pengaduan WHERE nik = '$nik_login' and status = 'selesai'";
                $eks_peng_selesai = mysqli_query($koneksi, $sql_peng_selesai);
                $jml_peng_selesai = mysqli_num_rows($eks_peng_selesai);
    
                $sql_peng_tdk_valid= "SELECT * FROM pengaduan WHERE nik = '$nik_login' and status = 'tidak valid'";
                $eks_peng_tdk_valid= mysqli_query($koneksi, $sql_peng_tdk_valid);
                $jml_peng_tdk_valid= mysqli_num_rows($eks_peng_tdk_valid);
            }
            else
            {
                $sql_peng_all = "SELECT * FROM pengaduan order by id_pengaduan DESC";
                $eks_peng_all = mysqli_query($koneksi, $sql_peng_all);
                $jml_peng_all = mysqli_num_rows($eks_peng_all);
    
                $sql_peng_vrf = "SELECT * FROM pengaduan WHERE status = 'diverifikasi'";
                $eks_peng_vrf = mysqli_query($koneksi, $sql_peng_vrf);
                $jml_peng_vrf = mysqli_num_rows($eks_peng_vrf);
    
                $sql_peng_pros = "SELECT * FROM pengaduan WHERE status = 'diproses'";
                $eks_peng_pros = mysqli_query($koneksi, $sql_peng_pros);
                $jml_peng_pros = mysqli_num_rows($eks_peng_pros);
    
                $sql_peng_selesai = "SELECT * FROM pengaduan WHERE status = 'selesai'";
                $eks_peng_selesai = mysqli_query($koneksi, $sql_peng_selesai);
                $jml_peng_selesai = mysqli_num_rows($eks_peng_selesai);
    
                $sql_peng_tdk_valid = "SELECT * FROM pengaduan WHERE status = ' tidak valid'";
                $eks_peng_tdk_valid= mysqli_query($koneksi, $sql_peng_tdk_valid);
                $jml_peng_tdk_valid= mysqli_num_rows($eks_peng_tdk_valid);
            }
?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>


    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="rounded bg-light">
            <div class="py-3 px-3">
                <divc class="card-header text-center ">
                    <h3>Profil Saya</h3>
                </divc>
                <div class="card" style="max-width: 1280px;">
                    <div class="row g-0 px-2 py-2">
                        <div class="col-md-4">
                            <img src="img_properti/pfp.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <?php
                                if($level == 'masyarakat')
                                {
                                    $edit_file = "proses_edit_profil_anggota.php";
                                }
                                else
                                {
                                    $edit_file = "proses_edit_profil_petugas.php";
                                }
                                ?>
                                <form action="<?php echo $edit_file; ?>" method="post">
                                    <div class="my-2">
                                        <label for="exampleInputEmail1" class="form-label">Nik/Id</label>
                                        <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" readonly value="<?php echo $nik_login; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1"
                                            autocomplete="off" value="<?php echo $nama_login; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Telp</label>
                                        <input type="text" name="telp" class="form-control" id="exampleInputPassword1"
                                            autocomplete="off" value="<?php echo $telp; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control"
                                            id="exampleInputPassword1" autocomplete="off"
                                            value="<?php echo $username; ?>">
                                    </div>
                                    <div class="my-2">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="text" name="password" class="form-control"
                                            id="exampleInputPassword1" autocomplete="off"
                                            value="<?php echo $password; ?>">
                                    </div>
                            </div>
                        </div>
                        <div class="card my-2">
                            <div class="card-body text-center">
                                <p>Setelah anda mengubah profil anda akan otomatis logout dan diharuskan login ulang, anda yakin ingin mengubah profil?</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning">Edit</button>
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