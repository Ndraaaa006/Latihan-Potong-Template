<?php

include "connection.php";

$id_portfolio = $_POST['id_portfolio'];
$vjudul = $_POST['judul_portfolio'];
$vlink = $_POST['link'];
$vdeskripsi = $_POST['deskripsi'];
$vjenis = $_POST['jenis'];

// PERBAIKAN BAGIAN GAMBAR
$nama_file = $_FILES['img']['name'];

if ($nama_file != "") {

    $nama_baru = time() . ".jpg";
    $path = "foto/";

    move_uploaded_file($_FILES['img']['tmp_name'], $path . $nama_baru);

    $update_portfolio = mysqli_query($koneksi, "UPDATE portfolio SET 
    judul_portfolio='$vjudul',
    img='$nama_baru',
    link='$vlink',
    deskripsi='$vdeskripsi',
    jenis='$vjenis'
    WHERE id_portfolio='$id_portfolio'");

} else {

    // kalau tidak upload gambar baru
    $update_portfolio = mysqli_query($koneksi, "UPDATE portfolio SET 
    judul_portfolio='$vjudul',
    link='$vlink',
    deskripsi='$vdeskripsi',
    jenis='$vjenis'
    WHERE id_portfolio='$id_portfolio'");

}

header("Location:tabel_portfolio.php");
?>