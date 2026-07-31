<?php
include "connection.php";

$nama = $_POST['nama'];
$icon = $_POST['icon'];

$query = mysqli_query($koneksi, "INSERT INTO mobile 
VALUES (NULL, '$nama', '$icon')");

if ($query) {
    header("location:tabel_mobile.php");
} else {
    echo "Gagal insert";
}
?>