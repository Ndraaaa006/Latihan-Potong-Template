<?php
include "connection.php";

$id_language = $_POST['id_language'];
$vlanguage = $_POST['bahasa'];
$vlevel = $_POST['level']; // TAMBAHAN
$flagimage = time() . ".jpg";

$path = "fotobende/";

// kalau tidak upload gambar
if (empty($_FILES['flag']['name'])) {

    $sql_update_language_no_image = mysqli_query(
        $koneksi,
        "UPDATE language SET
        bahasa='$vlanguage',
        level='$vlevel' 
        WHERE id_language='$id_language'"
    );

    header("Location:tabel_language.php");

} else {

    // upload foto baru
    move_uploaded_file($_FILES['flag']['tmp_name'], $path . $flagimage);

    // ambil foto lama
    $fotobendera = mysqli_query(
        $koneksi,
        "SELECT * FROM language WHERE id_language='$id_language'"
    );

    $vflag = mysqli_fetch_object($fotobendera);

    // hapus foto lama kalau ada
    if (is_file($path . $vflag->flag)) {
        unlink($path . $vflag->flag);
    }

    // update dengan foto + level
    $sql_update_language_image = mysqli_query(
        $koneksi,
        "UPDATE language SET
        bahasa='$vlanguage',
        level='$vlevel',
        flag='$flagimage'
        WHERE id_language='$id_language'"
    );

    header("Location:tabel_language.php");
}
?>