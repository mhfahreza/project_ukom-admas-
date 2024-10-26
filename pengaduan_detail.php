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

            $id_pengaduan   = $_GET['id_pengaduan'];
            $sql_pengaduan  = "SELECT * FROM pengaduan INNER JOIN masyarakat on pengaduan.nik = masyarakat.nik WHERE id_pengaduan = '$id_pengaduan'";
            $eks_pengaduan  = mysqli_query($koneksi, $sql_pengaduan);
            $data_pengaduan = mysqli_fetch_array($eks_pengaduan);

?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>

    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="rounded bg-light">
            <div class="py-5 px-5">

                <div class="card my-3" style="max-width: 1240px;">
                    <div class="row g-0 px-3 py-3">
                        <div class="col-md-4">
                            <img src="img_aduan/<?php echo $data_pengaduan['foto'];?>" class="img-fluid rounded"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Isi Aduan</h5>
                                <p class="card-text"><?php echo $data_pengaduan['isi_laporan'];?></p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> <?php echo $data_pengaduan['tempat_kejadian'];?></p>
                                <p class="card-text"><small class="text-muted">Laporan dibuat oleh
                                        <?php echo $data_pengaduan['nama'];?> - <cite title="Source Title">
                                            <?php echo $data_pengaduan['nik'];?> - Pada
                                        <?php echo tgl($data_pengaduan['tgl_pengaduan']);?></cite>  - Status aduan
                                        <?php echo $data_pengaduan['status'];?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-3" style="max-width: 1240px;">
                    <div class="card-header text-center">
                        <h3 class="card-title"><?php if($level != 'masyarakat'){?>Buat<?php } ?> Tanggapan</h3>
                    </div>
                    <div class="card-body">

                        <?php
                    $sql_tanggapan          = "SELECT * FROM tanggapan INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas WHERE id_pengaduan = '$id_pengaduan' ORDER BY id_tanggapan DESC";
                    $eks_sql_tanggapan      = mysqli_query($koneksi, $sql_tanggapan);
                    while($data_tanggapan   = mysqli_fetch_array($eks_sql_tanggapan))
                    {
                    ?>
                        <div class="alert alert-primary" role="alert">
                            <p><?php echo $data_tanggapan['tanggapan']; ?></p>
                            <footer class="blockquote-footer text-black">
                                <?php echo $data_tanggapan['nama_petugas']; ?>
                                <cite title="Source Title"> pada <?php echo tgl($data_tanggapan['tgl_tanggapan']); ?></cite>
                            </footer>
                        </div>
                        <?php
                    }
                    ?>

                        <?php
                    if($level != 'masyarakat')
                    {
                    ?>
                        <form action="tambah_tanggapan.php" method="POST">
                            <div class="form-group">
                                <textarea name="tanggapan" id="ckeditor" class="form-control" required></textarea>
                                <input type="hidden" name="id_pengaduan" value="<?php echo $id_pengaduan; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary my-3">buat tanggapan</button>
                        </form>
                        <?php
                    }
                    ?>
                    </div>
                </div>

                <?php
                    if($level != 'masyarakat')
                    {
                ?>
                <div class="card my-3" style="max-width: 1240px;">
                    <div class="card-header text-center">
                        <h3 class="card-title">Ubah Status</h3>
                    </div>
                    <div class="card-body">
                        <form action="ubah_status.php" method="POST">
                            <div class="form-group">
                                <label for="" class="form-label">progress pengerjaan laporan</label>
                                <select name="status" id="" class="form-control">
                                    <?php
                                if($progress == "diverifikasi")
                                {
                            ?>
                                    <option value="diverifikasi" selected>dalam peninjauan</option>
                                    <option value="diproses">dalam pengerjaan</option>
                                    <option value="selesai">telah diselesaikan</option>
                                    <option value="tidak valid">aduan tidak valid</option>
                                    <?php
                                }
                                else if($progress == "diproses")
                                {
                            ?>
                                    <option value="diverifikasi">dalam peninjauan</option>
                                    <option value="diproses" selected>dalam pengerjaan</option>
                                    <option value="selesai">telah diselesaikan</option>
                                    <option value="tidak valid">aduan tidak valid</option>
                                    <?php
                                }
                                else if($progress == "selesai")
                                {
                            ?>
                                    <option value="diverifikasi">dalam peninjauan</option>
                                    <option value="diproses">dalam pengerjaan</option>
                                    <option value="selesai" selected>telah diselesaikan</option>
                                    <option value="tidak valid">aduan tidak valid</option>
                                    <?php
                                }
                                else 
                                {
                            ?>
                                    <option value="diverifikasi">dalam peninjauan</option>
                                    <option value="diproses">dalam pengerjaan</option>
                                    <option value="selesai">telah diselesaikan</option>
                                    <option value="tidak valid">aduan tidak valid</option>
                                    <?php
                                }
                            ?>
                                </select>
                                <input type="hidden" name="id_pengaduan" value="<?php echo $id_pengaduan; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">lakukan perubahan</button>
                        </form>
                    </div>
                </div>
                <?php
                }
                ?>
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