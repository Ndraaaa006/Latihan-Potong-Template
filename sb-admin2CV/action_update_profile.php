<?php
include "connection.php";

// menerima data dari update_profile.php
$id_profile = $_POST['id_profile'];
$vnama = $_POST['nama'];
$vdeskripsi = $_POST['about'];
$vwebsite = $_POST['website'];
$vphone = $_POST['phone'];
$vemail = $_POST['email'];
$vcity = $_POST['address'];
$vlinkedin = $_POST['linkedin'];
$vnationality = $_POST['nationality'];

// proses update data
$update_profile = mysqli_query($koneksi, "UPDATE profile SET
nama='$vnama',
about='$vdeskripsi',
website='$vwebsite',
phone='$vphone',
email='$vemail',
address='$vcity',
linkedin='$vlinkedin',
nationality='$vnationality'
WHERE id_profile='$id_profile'");

// cek berhasil atau tidak
if ($update_profile) {
    header("Location: tabel_profile.php");
} else {
    echo "Data gagal diupdate";
    echo "<br>";
    echo mysqli_error($koneksi);
}
?>