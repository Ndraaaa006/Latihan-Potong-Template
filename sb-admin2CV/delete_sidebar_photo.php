<?php
include "connection.php";

$id_sidebar_photo = $_GET['id_sidebar_photo'];

// ambil data foto dulu
$ambil = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE id_sidebar_photo='$id_sidebar_photo'");
$data = mysqli_fetch_object($ambil);

$path = "fotobende/";

// hapus file foto dari folder
if (is_file($path . $data->sidebar_photo)) {
    unlink($path . $data->sidebar_photo);
}

// hapus data dari database
$query = mysqli_query($koneksi, "DELETE FROM sidebar_photo 
WHERE id_sidebar_photo='$id_sidebar_photo'");

if ($query) {
    header("location:tabel_sidebar_photo.php");
} else {
    echo "Gagal delete";
}
?>