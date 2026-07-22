<?php
include "connection.php";

// ambil id dari tombol update
$id_profile = $_GET['id_profile'];

// tampilkan data berdasarkan id
$select_id = mysqli_query($koneksi, "SELECT * FROM profile WHERE id_profile='$id_profile'");

$profile = mysqli_fetch_object($select_id);
//
?>

<?php include "header.php" ?>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">
            <div id="content">
                <div class="container-fluid">

                <form action="action_update_profile.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama"
                        name="nama" value="<?php echo $profile->nama ?>">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Overview</label>
                        <!-- khusus TEXTAREA letak php nya echo $profile->deskripsi ?> diantara tag penutup dan pembuka -->
                        <textarea name="about" id="deskripsi" cols="30" rows="10"
                        class="form-control"><?php echo $profile->about ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" id="website"
                        name="website" value="<?php echo $profile->website ?>">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone"
                        name="phone" value="<?php echo $profile->phone ?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email"
                        name="email" aria-describedby="emailHelp" value="<?php echo $profile->email ?>">
                        <div id="emailHelp" class="form-text"> we'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea name="address" id="address" cols="20" rows="5"
                        class="form-control"><?php echo $profile->address ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin"
                        name="linkedin" value="<?php echo $profile->linkedin ?>">
                    </div>

                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality"
                        name="nationality" value="<?php echo $profile->nationality ?>">
                    </div>

                    
                    <input type="hidden" value="<?php echo $profile->id_profile?>" name="id_profile">

                    <button type="submit" class="btn btn-primary">Update</button>

                    <a href="tabel_profile.php" class="btn btn-secondary">Kembali</a>

                </form>

                </div>
            </div>
        </div>
    </div>
</body>