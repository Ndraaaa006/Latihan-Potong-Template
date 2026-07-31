<?php

include "connection.php";

// 
if (isset($_POST['submit'])) {

    // 
    $email = $_POST['email'];
    $password = $_POST['password'];

    //
    $insert = mysqli_query($koneksi, "INSERT INTO login
    (email, password)
    VALUES
    ('$email', '$password')");

    // 
    if ($insert) {
        header("Location: tabel_login.php");
    } else {
        echo "Data gagal disimpan";
    }

}

?>