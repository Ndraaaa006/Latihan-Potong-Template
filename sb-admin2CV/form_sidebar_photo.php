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
                        <h1 class="h3 mb-0 text-gray-800">Add Sidebar Photo</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_insert_sidebar_photo.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <table for="sidebar_photo" class="form-label">Photo</table>
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