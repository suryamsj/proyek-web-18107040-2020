<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "page/home/index.php";
            break;
        case 'datamhs':
            include "page/mahasiswa/view.php";
            break;
        case 'tambahmhs':
            include "page/mahasiswa/add.php";
            break;
        case 'ubahmhs':
            include "page/mahasiswa/edit.php";
            break;
        case 'hapusmhs':
            include "page/mahasiswa/delete.php";
            break;
        case 'fakultas':
            include "page/fakultas/index.php";
            break;
        case 'jurusan':
            include "page/jurusan/index.php";
            break;
        case 'dosen':
            include "page/dosen/index.php";
            break;
    }
} else {
    include "page/home/index.php";
}
