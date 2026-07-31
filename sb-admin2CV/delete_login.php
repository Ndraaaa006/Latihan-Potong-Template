<?php

include "connection.php";

$id_login = $_GET['id_login'];

$delete = mysqli_query($koneksi, "DELETE FROM login WHERE id_login='$id_login'");

if ($delete) {
    header("Location: tabel_login.php");
} else {
    echo "Data gagal dihapus";
}

?>