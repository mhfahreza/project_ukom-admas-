<?php
    session_start();
    if(empty($_SESSION['nik_login']))
    {
    include "header1.php";
?>

<!-- container fluid with background -->
<div class="container-fluid" style="background-image:url('img_properti/bg2.jpeg');">
    <!-- navbar -->
    <?php
            include "navbar1.php";
    ?>

    <!-- isi container fluid -->
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-8 text-white">
                <h1>Sistem Informasi Masyarakat Banten</h1>
                <h3>Bersama Membangun Banten Lebih baik</h3>
                <br>
                <p>Sistem Informasi Masyarakat Banten (SIMB) adalah sebuah website pengaduan yang bertujuan untuk
                    memberikan sarana bagi masyarakat Banten dalam menyampaikan keluhan, saran, atau masukan
                    mengenai berbagai hal yang berkaitan dengan kehidupan sosial, ekonomi, politik, dan lingkungan
                    di sekitar mereka. SIMB didesain untuk memudahkan masyarakat Banten dalam menyampaikan suara
                    mereka dan mempercepat penyelesaian masalah dengan melibatkan pihak berwenang dan tim ahli yang
                    terdiri dari berbagai bidang. SIMB juga dilengkapi dengan fitur-fitur yang memungkinkan
                    masyarakat untuk berpartisipasi aktif dalam meningkatkan kualitas hidup di sekitar mereka.
                    Dengan SIMB, masyarakat Banten dapat lebih mudah dan efektif dalam menyampaikan keluhan, saran,
                    dan masukan mengenai berbagai hal yang berkaitan dengan kehidupan mereka.</p>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>

</div>

<!-- konten tengah -->
<div class="container-fluid">
    <div class="container">
        <div class="text-center">
            <h3>Bagaimana Laporan Anda Diproses?</h3>
            <hr>
        </div>
        <br>
        <div class="row d-flex justify-content-between">
            <div class="card text-white bg-secondary mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header">Tahap Pertama</div>
                <div class="card-body">
                    <h5 class="card-title">Verifikasi</h5>
                    <p class="card-text">Setelah user login, user dapat membuat aduan, aduan akan diverifikasi terlebih dahulu oleh petugas jika aduan valid maka dapat diteruskan ketahapan berikutnya yaitu tahap proses pengerjaan. Jika laporan yang diberikan tidak sesuai maka laporan akan masuk pada status "tidak valid".</p>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header">Tahap Kedua</div>
                <div class="card-body">
                    <h5 class="card-title">Proses</h5>
                    <p class="card-text">Selesai dari tahap verifikasi aduan, maka aduan akan dikerjakan oleh petugas berwenang.</p>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3 col-md-4" style="max-width: 18rem;">
                <div class="card-header">Tahap Ketiga</div>
                <div class="card-body">
                    <h5 class="card-title">Selesai</h5>
                    <p class="card-text">Pada tahap ini aduan dari user sudah diselesaikan oleh petugas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer1.php";
    }
    else
    {
        header("location:dashboard.php");
    }
?>