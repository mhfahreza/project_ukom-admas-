<?php
        session_start();
        if(!empty($_SESSION['nik_login']))
        {
            include "koneksi.php";

            $sql_peng_selesai = "SELECT * FROM pengaduan INNER JOIN masyarakat ON masyarakat.nik = pengaduan.nik WHERE status = 'selesai' order by id_pengaduan DESC";
            $eks_peng_selesai = mysqli_query($koneksi, $sql_peng_selesai);
            $jml_peng_selesai = mysqli_num_rows($eks_peng_selesai);

            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_selesai.xls");

?>

        <h4>tabel pengaduan telah diselesaikan</h4>
        <table border="1">
            <thead>
                <tr class="table-primary">
                <th scope="col">No.</th>
                <th scope="col">NIK Masyarakat</th>
                <th scope="col">Nama Masyarakat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Isi Pengaduan</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while($data = mysqli_fetch_array($eks_peng_selesai))
                {
                ?>
                <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tgl_pengaduan']; ?></td>
                <td><?php echo $data['isi_laporan']; ?></td>
                <td><?php 
                        if($data['status'] == "diverifikasi")
                        {
                            echo "belum diproses, sedang dalam tahap verifikasi";
                        }
                        else
                        {
                            echo $data['status'];
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

        <p><span>jumlah laporan yang masuk <?php echo $jml_peng_selesai; ?></span></p>
<?php
        }
?>