<!-- ini adalah langkah kedua setelah dari FORM_PROFILE.PHP -->
<!-- selanjutnya ke tabel_profile -->

<?php
include "connection.php";

if (isset($_POST['submit'])) {

    // $vnama untuk penyimpanan sedangkan %_POST menerima inputan nama="nama" dari form_profile.php
    $nama = $_POST['nama'];
    $about = $_POST['about'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $linkedin = $_POST['linkedin'];
    $nationality = $_POST['nationality'];

    // mysql_query adalah perintah untuk menyatukan koneksi database dengan query tabel.
    // (nama, about, website, phone, email, address, linkedin) adalah nama-nama kolom database
    // ('$vnama', '$vdeskripsi', '$vphone', '$vemail', '$vaddress', '$vcity', '$linkedin') adalah variabel di atas yang 
    $query = mysqli_query($koneksi, "INSERT INTO profile
    (nama, about, website, phone, email, address, linkedin, nationality)
    VALUES
    ('$nama', '$about', '$website', '$phone', '$email', '$address', '$linkedin', '$nationality')");

    // Mengecek apakah berhasil
    if ($query) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location='tabel_profile.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                window.history.back();
              </script>";

        echo mysqli_error($koneksi);
    }

} else {

    header("Location: form_profile.php");

}
?>