<!-- Ini adalah langkah kedua setelah dari FORM_LANGUAGE.PHP -->
<!-- selanjutnya ke tabel_language -->

<?php
include "connection.php";

// $vnama untuk penyimpanan sedangkan $_POST menerima inputan name="nama" dr form_language.php
$vlanguage = $_POST['bahasa'];
$vlevel = $_POST['level'];
$vflagimage = time() . ".jpg";

// untuk menyimpan file foto
$path = "fotobende/";

// untuk meng upload foto digunakan fungsi move_uploaded_file
if ($_FILES['flag']['tmp_name'] != "") {
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $vflagimage);
} else {
    $vflagimage = "";
}

// mysqli_query adalah perintah utk menyatukan koneksi database dengan query tabel.
$sql_insert = mysqli_query($koneksi, "INSERT INTO language (bahasa, flag, level)
VALUES ('$vlanguage', '$vflagimage', '$vlevel')");

// header location untuk mengarahkan halaman ke tabel_language
header("Location:tabel_language.php");
?>