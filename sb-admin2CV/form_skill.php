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
                        <h1 class="h3 mb-0 text-gray-800">Skill</h1>
                    </div>

                    <!-- Content Start -->

                    <form action="action_insert_skill.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">Skill</label>
                            <input type="text" class="form-control" name="nama_skill">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="tabel_skill.php" class="btn btn-secondary">Kembali</a>

                    </form>

                    <!-- content end -->

                </div>

            </div>

            <?php include "footer.php" ?>

        </div>

    </div>

    <?php include "bottom.php" ?>