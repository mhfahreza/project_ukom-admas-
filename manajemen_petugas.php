<?php
        session_start();
        if(!empty($_SESSION['nik_login']) AND ($_SESSION['level'] == 'admin'))
        {
    
        include "header2.php";
        include "koneksi.php";
        include "function_tanggal.php";
    
        $nik_login = $_SESSION['nik_login'];
        $nama_login = $_SESSION['nama_login'];
        $level = $_SESSION['level'];

        $sql_masyarakat = "SELECT * FROM masyarakat";
        $eks_masyarakat = mysqli_query($koneksi, $sql_masyarakat);
        $jml_masyarakat = mysqli_num_rows($eks_masyarakat);

        $sql_petugas = "SELECT * FROM petugas WHERE level = 'petugas'";
        $eks_petugas = mysqli_query($koneksi, $sql_petugas);
        $jml_petugas = mysqli_num_rows($eks_petugas);

        $sql_administrator = "SELECT * FROM petugas WHERE level = 'admin'";
        $eks_administrator = mysqli_query($koneksi, $sql_administrator);
        $jml_administrator = mysqli_num_rows($eks_administrator);

        $sql_all_petugas = "SELECT * FROM petugas";
        $eks_all_petugas = mysqli_query($koneksi, $sql_all_petugas);
        $jml_all_petugas = mysqli_num_rows($eks_all_petugas);

?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>

    <div class="container bg-secondary rounded px-3 pt-3 pb-1 my-3">
        <div class="row d-flex justify-content-around">

            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Masyarakat</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_masyarakat; ?></h3>
                </div>
            </div>

            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Petugas</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_petugas; ?></h3>
                </div>
            </div>

            <div class="card text-bg-light mb-3 text-center" style="max-width: 18rem;">
                <div class="card-header">Admin</div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $jml_administrator; ?></h3>
                </div>
            </div>

        </div>
    </div>

    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="mb-3 bg-light py-2 rounded px-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Petugas
            </button>
            <a href="report_petugas.php" class="btn btn-success">XLS</a>
        </div>
        <div class=" mb-3">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Petugas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="tambah_petugas.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama petugas</label>
                                        <input type="text" name="nama_petugas" class="form-control" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">nomor telepon</label>
                                        <input type="text" name="telp" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">password</label>
                                        <input type="password" name="password" class="form-control" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">pilih role</label>
                                        <p>
                                            <select name="level" id="" class="form-control" required autocomplete="off">
                                                <option value="petugas">petugas</option>
                                                <option value="admin">admin</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">tutup</button>
                                        <button type="submit" class="btn btn-primary">Buat Akun Petugas</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded bg-light">
            <div class="py-5 px-5">
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Id Petugas</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                while($data = mysqli_fetch_array($eks_all_petugas))
                                {
                                ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $data['id_petugas']; ?></td>
                                <td><?php echo $data['nama_petugas']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['telp']; ?></td>
                                <td><?php echo $data['level']; ?></td>
                                <td class="row g-1">
                                    <a class="btn btn-sm btn-primary col mx-1 "
                                        href="detail_petugas.php?id_petugas=<?php echo $data['id_petugas']; ?>"><i
                                            class="fas fa-address-card"></i></a>
                                            <?php
                                            if($data['id_petugas'] != '1')
                                            {
                                            ?>
                                    <a class="btn btn-sm btn-warning col mx-1"
                                        href="edit_petugas.php?id_petugas=<?php echo $data['id_petugas']; ?>"><i
                                            class="fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger col mx-1"
                                        href="hapus_petugas.php?id_petugas=<?php echo $data['id_petugas']; ?>"><i
                                            class="fas fa-trash"></i></a>
                                            <?php
                                            }
                                            ?>
                                </td>
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