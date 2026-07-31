<?php
include "connection.php";

$id_language = $_GET['id_language'];

$query = mysqli_query($koneksi, "DELETE FROM language 
WHERE id_language='$id_language'");

if ($query) {
    header("location:tabel_language.php");
} else {
    echo "Gagal delete";
}
?>