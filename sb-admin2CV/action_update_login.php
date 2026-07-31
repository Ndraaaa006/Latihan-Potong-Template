<?php

include "connection.php";

$id_login = $_POST['id_login'];
$email = $_POST['email'];
$password = $_POST['password'];

$update = mysqli_query($koneksi, "UPDATE login SET
email='$email',
password='$password'
WHERE id_login='$id_login'");

if ($update) {
    header("Location: tabel_login.php");
} else {
    echo "Data gagal diupdate";
}

?>