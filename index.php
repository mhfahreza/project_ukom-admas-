<?php
    session_start();
    if(empty($_SESSION['nik_login']))
    {
    include "header1.php";
?>

<!-- container fluid with background -->
<div class="container-fluid" style="background-image:url('img_properti/bg1.jpeg');">
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
            <h3>Sedikit Tentang Kami</h3>
            <hr>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 row py-1">
                <div class="col-md-3 rounded bg-secondary px-1 py-3 text-center mb-5">
                    <img src="img_properti/pekerja1.avif" class="img-fluid object-fit-contain border rounded" >
                </div>
                <div class="col-md-3 rounded bg-secondary px-1 pt-4 text-center mx-1 my-3">
                    <img src="img_properti/pekerja2.avif" class="img-fluid object-fit-contain border rounded" >
                </div>
                <div class="col-md-3 rounded bg-secondary px-1 py-3 text-center mt-5">
                    <img src="img_properti/pekerja3.avif" class="img-fluid object-fit-contain border rounded" >
                </div>
            </div>
            <div class="col-md-4 ms-2 py-3">
                <p class="text-center"><strong>Seperti apa itu SIMB?</strong></p>
                <p>Sistem Informasi Masyarakat Banten (SIMB) merupakan sebuah website yang dibuat untuk memberikan
                    sarana bagi masyarakat Banten dalam menyampaikan keluhan, saran, atau masukan mengenai berbagai hal
                    yang berkaitan dengan kehidupan sosial, ekonomi, politik, dan lingkungan di sekitar mereka.</p>
                <p>Melalui SIMB, masyarakat Banten dapat memberikan pengaduan secara langsung kepada pihak yang
                    berwenang dan bertanggung jawab dalam menangani masalah tersebut. Pengaduan yang diterima oleh SIMB
                    akan dikelola dan ditindaklanjuti oleh tim ahli yang terdiri dari berbagai bidang, sehingga masalah
                    yang disampaikan dapat segera diselesaikan dengan cepat dan tepat.</p>
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