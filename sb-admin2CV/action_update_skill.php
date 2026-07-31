<?php

include "connection.php";

$id_skill = $_POST['id_skill'];
$nama_skill = $_POST['nama_skill'];

$update = mysqli_query($koneksi, "UPDATE skill SET
nama_skill='$nama_skill'
WHERE id_skill='$id_skill'");

if ($update) {

    header("Location:tabel_skill.php");

} else {

    echo "Data gagal diupdate";

}

?>