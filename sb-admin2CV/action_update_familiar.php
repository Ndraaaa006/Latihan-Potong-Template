<!-- from file update_form_profile.php -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan
// name="nama" dr form_profile.php

$id_familiar = $_POST['id_familiar'];
$vnama = $_POST['nama'];
$vicon = $_POST['icon'];

$update_familiar = mysqli_query($koneksi, "
    UPDATE familiar
    SET
        nama='$vnama',
        icon='$vicon'
    WHERE id_familiar='$id_familiar'
");

header("Location:tabel_familiar.php");
?>