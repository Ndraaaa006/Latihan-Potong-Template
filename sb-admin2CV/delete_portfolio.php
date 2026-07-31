<?php

include "connection.php";

// untuk menerima id_portfolio yang dibawa dari tombol DELETE dari TABEL PORTFOLIO menggunakan $id_portfolio

// $_GET['id_portfolio']; menyimpan sementara id yang nanti akan digunakan pada perintah DELETE di bawahnya.

$id_portfolio = $_GET['id_portfolio'];

// ini perintah sql untuk mendelete data mendasarkan id_portfolio yang dibawa 
$delete = mysqli_query($koneksi, "DELETE FROM portfolio WHERE id_portfolio='$id_portfolio'");

// setelah proses delete dijalankan, maka akan kembali ke file tabel_portfolio.php
header("Location: tabel_portfolio.php");
?>