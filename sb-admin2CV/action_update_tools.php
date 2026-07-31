<?php

include "connection.php";

$id_tools = $_POST['id_tools'];
$nama = $_POST['nama'];
$icon = $_POST['icon'];

$update = mysqli_query($koneksi, "UPDATE tools SET
nama = '$nama',
icon = '$icon'
WHERE id_tools = '$id_tools'");

if ($update) {
    header("Location:tabel_tools.php");
} else {
    echo "Data gagal diupdate";
}

?>