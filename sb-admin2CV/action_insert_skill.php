<?php

include "connection.php";

$nama_skill = $_POST['nama_skill'];

$insert = mysqli_query($koneksi, "INSERT INTO skill(nama_skill)
VALUES('$nama_skill')");

if ($insert) {
    header("Location:tabel_skill.php");
} else {
    echo "Data gagal disimpan";
}

?>