<?php
include "connection.php";

$nama = $_POST['nama_pekerjaan'];
$tahun = $_POST['tahun_bekerja'];
$tempat = $_POST['tempat_bekerja'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "INSERT INTO job 
VALUES (NULL, '$nama', '$tahun', '$tempat', '$deskripsi')");

if ($query) {
    header("location:tabel_job.php");
} else {
    echo "Gagal insert";
}
?>