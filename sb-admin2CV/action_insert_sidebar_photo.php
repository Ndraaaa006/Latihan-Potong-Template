<?php
include "connection.php";

$nama_file = time() . ".jpg";

$path = "foto/"; // SAMAKAN DENGAN TABEL

move_uploaded_file($_FILES['sidebar_photo']['tmp_name'], $path . $nama_file);

$query = mysqli_query($koneksi, "INSERT INTO sidebar_photo 
VALUES (NULL, '$nama_file')");

if ($query) {
    header("location:tabel_sidebar_photo.php");
} else {
    echo "Gagal insert";
}
?>