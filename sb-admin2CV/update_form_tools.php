<?php
include "connection.php";

$id_tools = $_GET['id_tools'];

$select_id = mysqli_query($koneksi, "SELECT * FROM tools WHERE id_tools='$id_tools'");
$tools = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Tools</h1>

                    </div>

                    <!-- Content Start -->
                    <form action="action_update_tools.php" method="post">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Tools</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $tools->nama ?>">
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="<?php echo $tools->icon ?>">
                        </div>

                        <input type="hidden" name="id_tools" value="<?php echo $tools->id_tools ?>">

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="tabel_tools.php" class="btn btn-secondary">Kembali</a>

                    </form>

                    <!-- Content End -->

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