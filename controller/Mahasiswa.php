<?php

function Koneksi()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "dtb_praktikum";
    return mysqli_connect($server, $username, $password, $db);
}

function Index($query)
{
    $koneksi = Koneksi();
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function Create($data)
{
    $koneksi = Koneksi();
    $nim = htmlspecialchars($data["nim"]);
    $nm_mahassiwa = htmlspecialchars($data["nm_mahasiswa"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $id_fakultas = htmlspecialchars($data["id_fakultas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $ipk = htmlspecialchars($data["ipk"]);

    $query = "INSERT INTO mahasiswa VALUES (null,'$nim','$nm_mahassiwa','$tempat','$tanggal','$id_fakultas','$id_jurusan','$ipk')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Update($data)
{
    $koneksi = Koneksi();
    $idmhs = htmlspecialchars($data["id_mahasiswa"]);
    $nim = htmlspecialchars($data["nim"]);
    $nm_mahassiwa = htmlspecialchars($data["nm_mahasiswa"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $id_fakultas = htmlspecialchars($data["id_fakultas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $ipk = htmlspecialchars($data["ipk"]);

    $query = "UPDATE mahasiswa SET nim = '$nim', nm_mahasiswa = '$nm_mahassiwa', tempat = '$tempat', tanggal = '$tanggal', id_fakultas = '$id_fakultas', id_jurusan ='$id_jurusan',ipk = '$ipk' WHERE id_mahasiswa = $idmhs";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Delete($id)
{
    $koneksi = Koneksi();
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
