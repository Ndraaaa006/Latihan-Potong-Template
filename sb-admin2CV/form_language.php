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
                        <h1 class="h3 mb-0 text-gray-800">Add Language</h1>
                    </div>

                    <!-- Content Start -->
                    <form action="action_insert_language.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <table class="form-label">Language</table>
                            <input type="text" class="form-control" name="bahasa">
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Flag</table>
                            <input type="file" class="form-control" name="flag">
                        </div>

                        <!-- TAMBAHAN LEVEL (INI SAJA YANG DITAMBAH) -->
                        <div class="mb-3">
                            <table class="form-label">Level</table>
                            <select class="form-control" name="level">
                                <option value="">-- Pilih Level --</option>
                                <option value="Pemula">Pemula</option>
                                <option value="Menengah">Menengah</option>
                                <option value="Mahir">Mahir</option>
                                <option value="Sangat Lancar">Sangat Lancar</option>
                            </select>
                        </div>

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