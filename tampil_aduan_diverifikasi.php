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
            if($level == 'masyarakat')
            {
                $sql_peng_all = "SELECT * FROM pengaduan WHERE nik = '$nik_login' order by id_pengaduan DESC";
                $eks_peng_all = mysqli_query($koneksi, $sql_peng_all);
                $jml_peng_all = mysqli_num_rows($eks_peng_all);
    
                $sql_peng_vrf = "SELECT * FROM pengaduan WHERE nik = '$nik_login' and status = 'diverifikasi' order by id_pengaduan DESC";
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
    
                $sql_peng_vrf = "SELECT * FROM pengaduan WHERE status = 'diverifikasi' order by id_pengaduan DESC";
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

    <div class="container bg-secondary rounded px-3 pt-3 pb-1 my-3">
        <div class="row d-flex justify-content-around">

            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Total Seluruh Aduan</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_peng_all; ?></h3>
                </div>
            </div>


            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Aduan Diverifikasi</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_peng_vrf; ?></h3>
                </div>
            </div>


            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Aduan Diproses</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_peng_pros; ?></h3>
                </div>
            </div>


            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Aduan Diselesaikan</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_peng_selesai; ?></h3>
                </div>
            </div>

        </div>
    </div>

    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <?php
         if($level == 'admin')
         {
        ?>
        <div class="mb-3 bg-light py-2 rounded px-2">
            <a href="report_verifikasi.php" class="btn btn-success">XLS</a>
        </div>
        <?php
         }
        ?>
        <div class="rounded bg-light">
            <div class="py-5 px-5">
                <div class="table-responsive">
                    <table class="table table-striped" id="example">
                        <thead>
                            <tr class="table-light">
                                <th scope="col">No</th>
                                <?php
                                    if($level != 'masyarakat')
                                    {
                                    ?>
                                <th scope="col">NIK</th>
                                <?php
                                        }
                                    ?>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Isi Aduan</th>
                                <th scope="col">tempat kejadian</th>
                                <th scope="col">status</th>
                                <?php
                                    if($level == 'admin')
                                    {
                                    ?>
                                <th scope="col">hapus</th>
                                <?php
                                    }
                                    ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                while($data = mysqli_fetch_array($eks_peng_vrf))
                                {
                                ?>
                                <th scope="row"><?php echo $no; ?></th>
                                <?php
                                    if($level != 'masyarakat')
                                    {
                                    ?>
                                <td><?php echo $data['nik']; ?></td>
    
                                <?php
                                    }
                                    ?>
                                <td><?php echo tgl($data['tgl_pengaduan']); ?></td>
                                <td><a href="pengaduan_detail.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>"
                                        class="text-secondary"><?php echo $data['isi_laporan']; ?></td>
                                <td><?php echo $data['tempat_kejadian']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <?php 
                                    if($level == 'admin')
                                    {
                                    ?>
                                <td><a class="btn btn-sm btn-danger"
                                        href="hapus_aduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>"><i class="fas fa-trash"></i></a>
                                </td>
                                <?php
                                    }
                                    ?>
                            </tr>
                            <?php
                               $no++;
                                }
                            ?>
                        </tbody>
                    </table>
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