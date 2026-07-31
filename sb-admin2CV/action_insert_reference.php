<?php

include "connection.php";

// Jika tombol submit ditekan
if (isset($_POST['submit'])) {

    //
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $perusahaan = $_POST['perusahaan'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    //
    //
    //
    $query = mysqli_query($koneksi, "INSERT INTO reference
    (nama, jabatan, perusahaan, phone, email)
    VALUES
    ('$nama', '$jabatan', '$perusahaan', '$phone', '$email')");

    //
    if ($query) {
        header("Location: tabel_reference.php");
    } else {
        echo "Data gagal disimpan!";
    }

}
?>