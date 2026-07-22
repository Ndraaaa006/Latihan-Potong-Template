<!-- we are from tabel_profile -->

<?php
include "connection.php";

//
//
$id_profile=$_GET['id_profile'];

//
$delete = mysqli_query($koneksi, "DELETE FROM `profile` WHERE id_profile='$id_profile'");

//
header("Location: tabel_profile.php");