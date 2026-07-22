<?php
include "connection.php";

$vjurusan = $_POST['nama_jurusan'];
$vbelajar = $_POST['tahun_belajar'];
$vtempat = $_POST['tempat_belajar'];
$vdeskrip = $_POST['deskripsi'];

$sql_insert = mysqli_query($koneksi,"INSERT INTO education
(nama_jurusan,tahun_belajar,tempat_belajar,deskripsi)
values ('$vjurusan','$vbelajar','$vtempat','$vdeskrip')");

header("Location: tabel_education.php");
?>