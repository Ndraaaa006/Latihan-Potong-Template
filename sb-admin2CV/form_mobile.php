<?php include "header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            Add Mobile
                        </h1>

                    </div>


                    <!-- Content Start -->
                    <form action="action_insert_mobile.php" method="post">

                        <div class="mb-3">

                            <table for="nama" class="form-label">
                                Name
                            </table>

                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                            >

                        </div>


                        <div class="mb-3">

                            <table for="icon" class="form-label">
                                Icon
                            </table>

                            <input
                                type="text"
                                class="form-control"
                                id="icon"
                                name="icon"
                                placeholder="contoh: fa fa-phone"
                            >

                        </div>


                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                        <a href="tabel_mobile.php" class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>
                    <!-- Content End -->


                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <?php include "footer.php"; ?>


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button -->
    <?php include "bottom.php"; ?>


</body>

</html>