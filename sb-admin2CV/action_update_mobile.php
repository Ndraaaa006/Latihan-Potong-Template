<?php
include "connection.php";

$id_mobile = $_POST['id_mobile'];
$nama      = $_POST['nama'];
$icon      = $_POST['icon'];

$query = mysqli_query($koneksi, "UPDATE mobile SET 
nama='$nama',
icon='$icon'
WHERE id_mobile='$id_mobile'");

if ($query) {
    header("location:tabel_mobile.php");
} else {
    echo "Gagal update";
}
?>