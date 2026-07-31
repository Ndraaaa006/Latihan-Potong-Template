<?php
include "connection.php";

$id = $_POST ['id_education'];
$nama = $_POST['nama_jurusan'];
$tahun = $_POST['tahun_belajar'];
$tempat = $_POST['tempat_belajar'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "UPDATE education SET 
nama_jurusan='$nama',
tahun_belajar='$tahun',
tempat_belajar='$tempat',
deskripsi='$deskripsi'
WHERE id_education='$id'");

if ($query) {
    header("location:tabel_education.php");
} else {
    echo "Gagal update";
}
?>