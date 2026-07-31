<!-- we are from topbar.php -->

<?php

session_start();

// menghapus session login
session_destroy();

// setelah dihapus, akan diarahkan ke halaman login
header("Location:login.php?pesan=logout");

?>