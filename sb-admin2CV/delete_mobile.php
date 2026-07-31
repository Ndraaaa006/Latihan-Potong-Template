<?php
include "connection.php";

$id_mobile = $_GET['id_mobile'];

$query = mysqli_query($koneksi, "DELETE FROM mobile 
WHERE id_mobile='$id_mobile'");

if ($query) {
    header("location:tabel_mobile.php");
} else {
    echo "Gagal delete";
}
?>