<?php

include "connection.php";

$id_reference = $_POST['id_reference'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$perusahaan = $_POST['perusahaan'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$update = mysqli_query($koneksi, "UPDATE reference SET
nama='$nama',
jabatan='$jabatan',
perusahaan='$perusahaan',
phone='$phone',
email='$email'
WHERE id_reference='$id_reference'");

if ($update) {
    header("Location: tabel_reference.php");
} else {
    echo "Data gagal diupdate";
}

?>