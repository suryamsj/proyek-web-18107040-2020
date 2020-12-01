<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum - 8</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="asset/css/datatables.min.css">
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="asset/js/jquery-3.5.1.min.js"></script>
    <script src="asset/js/datatables.min.js"></script>
    <script src="asset/js/datedropper.pro.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php?halaman=home">Pemrograman WEB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php?halaman=home">Home</a>
                    <a class="nav-link" href="index.php?halaman=datamhs">Mahasiswa</a>
                    <a class="nav-link" href="index.php?halaman=fakultas">Fakultas</a>
                    <a class="nav-link" href="index.php?halaman=jurusan">Jurusan</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->

    <!-- Content -->
    <?php require('controller/Menu.php') ?>
    <!-- Content END -->

    <!-- Footer -->
    <div class="py-3 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <p class="mb-0">Dibuat dengan <i class="fas fa-heart text-danger"></i> Oleh <a class="link-footer" href="https://www.instagram.com/kosmosbukancosmos/" target="_blank">Muhammad Surya J</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer END -->

    <!-- Javascript -->
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
</body>

</html>