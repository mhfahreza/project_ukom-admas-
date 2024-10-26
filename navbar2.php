<nav class="navbar navbar-expand-md bg-transparent navbar-dark py-3 sticky-top">
    <div class="container bg-dark rounded py-3 px-5">
        <a class="navbar-brand" href="dashboard.php"><i class="fas fa-comment-alt"></i> SIMB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="far fa-keyboard"></i> Dashboard</a>
                </li>
                <?php
                if($level == 'admin')
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tampil_lupa_password.php"><i class="fas fa-eye"></i> Lupa Password</a>
                </li>
                <?php
                }
                ?>
                <?php
                    if($level == 'masyarakat')
                    {
                ?>
                    <a class="nav-link active" aria-current="page" href="form_tambah_aduan.php"><i class="fas fa-envelope"></i> Buat Aduan</a>
                <?php
                    }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Aduan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tampil_total_aduan.php">Total aduan</a></li>
                        <li><a class="dropdown-item" href="tampil_aduan_diverifikasi.php">Aduan diverifikasi</a></li>
                        <li><a class="dropdown-item" href="tampil_aduan_diproses.php">Aduan diproses</a></li>
                        <li><a class="dropdown-item" href="tampil_aduan_diselesaikan.php">Aduan diselesaikan</a></li>
                        <li><a class="dropdown-item" href="tampil_aduan_tidak_valid.php">Aduan tidak valid</a></li>
                    </ul>
                </li>
                <?php
                    if($level == 'admin')
                    {
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Anggota
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="manajemen_masyarakat.php">Masyarakat</a></li>
                        <li><a class="dropdown-item" href="manajemen_petugas.php">Petugas dan Admin</a></li>
                    </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
            <div class="d-flex collapse">
                <div class="dropdown">
                    <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">> <?php echo $nama_login; ?></a></li>
                        <li><a class="dropdown-item" href="#">> <?php echo $level; ?></a></li>
                        <li><a class="dropdown-item" href="profilku.php">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="edit_profil.php">Edit Profil</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>