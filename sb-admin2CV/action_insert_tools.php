<?php

include "connection.php";

$nama = $_POST['nama'];
$icon = $_POST['icon'];

$insert = mysqli_query($koneksi, "INSERT INTO tools (nama, icon)
VALUES ('$nama', '$icon')");

if ($insert) {
    header("Location:tabel_tools.php");
} else {
    echo "Data gagal disimpan";
}

?>