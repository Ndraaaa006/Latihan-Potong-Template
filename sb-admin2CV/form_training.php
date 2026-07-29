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
                        <h1 class="h3 mb-0 text-gray-800">Add Training</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_insert_training.php" method="post">
                        <div class="mb-3">
                            <table for="training" class="form-label">Subject</table>
                            <input type="text" class="form-control" id="training" name="nama_training">
                        </div>

                        <div class="mb-3">
                            <table for="year" class="form-label">Year</table>
                            <input type="text" class="form-control" id="year" name="tahun_training">
                        </div>

                        <div class="mb-3">
                            <table for="place" class="form-label">Place</table>
                            <input type="text" class="form-control" id="place" name="tempat_training">
                        </div>

                        <div class="mb-3">
                            <table for="deskripsi" class="form-label">Description</table>
                            <textarea name="deskripsi" id="deskripsi" cols="30" class="form-control" rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_training.php" class="btn btn-secondary">Kembali</a>
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