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

                $sql_peng_all = "SELECT * FROM lupa_password";
                $eks_peng_all = mysqli_query($koneksi, $sql_peng_all);
                $jml_peng_all = mysqli_num_rows($eks_peng_all);
    
?>

<div class="container-fluid">

    <?php
            include "navbar2.php";
        ?>



    <div class="container bg-secondary rounded px-3 py-4 my-3">
        <div class="rounded bg-light">
            <div class="py-5 px-5">
                <div class="table-responsive">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr class="table-light">
                            <th scope="col">No</th>
                            <th>info akun</th>
                            <th>level</th>
                            <th>password baru</th>
                            <th>hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($eks_peng_all))
                            {
                            ?>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $data['info_akun']?></td>
                            <td><?php echo $data['level']?></td>
                            <td><?php echo $data['password_baru']?></td>
                            <td class="text-center">
                                <a href="hapus_lupa_password.php?id_password=<?php echo $data['id_password']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
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