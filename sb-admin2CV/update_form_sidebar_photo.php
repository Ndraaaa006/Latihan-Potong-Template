<?php
include "connection.php";

$id_sidebar_photo = $_GET['id_sidebar_photo'];

$select = mysqli_query($koneksi, "SELECT * FROM sidebar_photo WHERE id_sidebar_photo='$id_sidebar_photo'");
$data = mysqli_fetch_object($select);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Sidebar Photo</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_update_sidebar_photo.php" method="post" enctype="multipart/form-data">
                        
                        <input type="hidden" name="id_sidebar_photo" value="<?php echo $data->id_sidebar_photo; ?>">

                        <div class="mb-3">
                            <table class="form-label">Photo Lama</table>
                            <br>
                            <img src="foto/<?php echo $data->sidebar_photo; ?>" width="120">
                        </div>

                        <div class="mb-3">
                            <table for="sidebar_photo" class="form-label">Photo Baru</table>
                            <input type="file" class="form-control" id="sidebar_photo" name="sidebar_photo">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_sidebar_photo.php" class="btn btn-secondary">Kembali</a>

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