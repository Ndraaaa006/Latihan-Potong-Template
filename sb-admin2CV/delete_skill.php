<?php

include "connection.php";

$id_skill = $_GET['id_skill'];

$delete = mysqli_query($koneksi, "DELETE FROM skill WHERE id_skill='$id_skill'");

if ($delete) {

    header("Location:tabel_skill.php");

} else {

    echo "Data gagal dihapus";

}

?>