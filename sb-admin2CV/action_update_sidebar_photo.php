<?php
include "connection.php";

// ambil id dari form update
$id_sidebar_photo = $_POST['id_sidebar_photo'];

$nama_file = time() . ".jpg";

$path = "foto/";

// jika tidak upload foto baru
if (empty($_FILES['sidebar_photo']['name'])) {

    $update = mysqli_query($koneksi, "UPDATE sidebar_photo SET 
    sidebar_photo=sidebar_photo 
    WHERE id_sidebar_photo='$id_sidebar_photo'");

    header("Location:tabel_sidebar_photo.php");

} else {

    // upload foto baru
    move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $nama_file);

    // ambil foto lama
    $ambil = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE id_sidebar_photo='$id_sidebar_photo'");
    $data = mysqli_fetch_object($ambil);

    // hapus foto lama
    if (is_file($path . $data->sidebar_photo)) {
        unlink($path . $data->sidebar_photo);
    }

    // update database dengan foto baru
    $update = mysqli_query($koneksi, "UPDATE sidebar_photo SET 
    sidebar_photo='$nama_file' 
    WHERE id_sidebar_photo='$id_sidebar_photo'");

    header("Location:tabel_sidebar_photo.php");
}
?>