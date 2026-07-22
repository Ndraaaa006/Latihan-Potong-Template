<!-- from file update_form__profile.php -->
<?php
include "connection.php";

// $nam untuk penyimpanan sedangkan $_POST menerima inputan nama="nama" dari form_profile.php
$id_profile = $_POST['id_profile'];
$vnama = $_POST['nama'];
$vdeskripsi = $_POST['about'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];
$vcity = $_POST['address'];
$vlinkedin = $_POST['linkedin'];
$vnationality = $_POST['nationality'];

$update_profile =mysqli_query($koneksi, "UPDATE profile SET
nama='$vnama',
about='$vdeskripsi',
phone='$vphone',
email='$vemail',
address='$vcity',
linkedin='$vlinkedin',
nationality='$vnationality' WHERE 
id_profile='$id_profile'");

header("Location: tabel_profile.php");