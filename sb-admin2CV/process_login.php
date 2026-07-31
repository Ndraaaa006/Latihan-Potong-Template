<?php

include "connection.php";

// mengaktifkan session
session_start();

// menampung data dari login.php
$email = $_POST['email'];
$password = $_POST['password'];

// mengecek email dan password pada database
$sql_login = mysqli_query($koneksi, "SELECT * FROM login WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($sql_login);

if ($cek > 0) {

    // menyimpan data session
    $_SESSION['email'] = $email;
    $_SESSION['status'] = "login";

    // jika berhasil login
    header("Location:index.php");

} else {

    // jika gagal login maka akan diarahkan kembali ke halaman LOGIN
    header("Location:login.php?pesan=gagal");

}