<?php
include "connection.php";

$id_language = $_GET['id_language'];

$select_id = mysqli_query($koneksi, "SELECT * FROM language WHERE id_language='$id_language'");
$language = mysqli_fetch_object($select_id);

?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Language</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_update_language.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <table class="form-label">Language</table>
                            <input type="text" class="form-control" name="bahasa" value="<?php echo $language->bahasa ?>">
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Level</table>
                            <select name="level" class="form-control">
                                <option value="Pemula" <?php if($language->level=='Pemula') echo 'selected'; ?>>Pemula</option>
                                <option value="Menengah" <?php if($language->level=='Menengah') echo 'selected'; ?>>Menengah</option>
                                <option value="Mahir" <?php if($language->level=='Mahir') echo 'selected'; ?>>Mahir</option>
                                <option value="Sangat Lancar" <?php if($language->level=='Sangat Lancar') echo 'selected'; ?>>Sangat Lancar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Flag</table>
                            <input type="file" class="form-control" name="flag">
                        </div>

                        <div class="mb-3">
                            <img src="fotobende/<?php echo $language->flag; ?>" width="80">
                        </div>

                        <input type="hidden" name="id_language" value="<?php echo $language->id_language ?>">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_language.php" class="btn btn-secondary">Kembali</a>
                    </form>

                    <!-- content end -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "bottom.php" ?>