<?php
include "connection.php";

$judul = $_POST['judul_portfolio'];
$link = $_POST['link'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];

// PERBAIKAN UPLOAD GAMBAR
$nama_file = time() . ".jpg";
$path = "foto/";

// pindahkan file ke folder
move_uploaded_file($_FILES['img']['tmp_name'], $path . $nama_file);

// masukkan ke database
$query = mysqli_query($koneksi, "INSERT INTO portfolio
VALUES (NULL, '$judul', '$nama_file', '$link', '$deskripsi', '$jenis')");

if ($query) {
    header("location:tabel_portfolio.php");
} else {
    echo "Gagal insert";
}
?>