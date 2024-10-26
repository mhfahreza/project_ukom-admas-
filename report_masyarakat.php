<?php
        session_start();
        if(!empty($_SESSION['nik_login']))
        {
            include "koneksi.php";

            $sql_masyarakat = "SELECT * FROM masyarakat";
            $eks_masyarakat = mysqli_query($koneksi, $sql_masyarakat);
            $jml_masyarakat = mysqli_num_rows($eks_masyarakat);

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_masyarakat.xls");

?>

        <h4>tabel daftar masyarakat</h4>
        <table border="1">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($eks_masyarakat))
                            {
                            ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['password']; ?></td>
                            <td>Aktif</td>
                            <td class="ps-3">
                                <a class="btn btn-sm btn-warning"
                                    href="edit_anggota.php?nik=<?php echo $data['nik']; ?>"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger"
                                    href="hapus_anggota.php?nik=<?php echo $data['nik']; ?>"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                            $no++;
                            }
                            ?>
                    </tbody>
                </table>

        <p><span>jumlah total masyarakat <?php echo $jml_masyarakat; ?></span></p>
<?php
        }
?>