<?php
        session_start();
        if(!empty($_SESSION['nik_login']))
        {
            include "koneksi.php";

            $sql_all_petugas = "SELECT * FROM petugas";
            $eks_all_petugas = mysqli_query($koneksi, $sql_all_petugas);
            $jml_all_petugas = mysqli_num_rows($eks_all_petugas);

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_petugas.xls");

?>

<h4>tabel daftar masyarakat</h4>
<table border="1">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Id Petugas</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Telp</th>
            <th scope="col">Level</th>
            <th scope="col">Status</th>
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
            <td>Aktif</td>
        </tr>
        <?php
                            $no++;
                            }
                            ?>
    </tbody>
</table>
<p><span>jumlah total petugas dan admin <?php echo $jml_all_petugas; ?></span></p>
<?php
        }
?>