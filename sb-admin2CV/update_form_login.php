<?php
include "connection.php";

$id_login = $_GET['id_login'];

$select_id = mysqli_query($koneksi, "SELECT * FROM login WHERE id_login='$id_login'");
$login = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Login</h1>

                    </div>

                    <!-- Content Start -->
                    <form action="action_update_login.php" method="post">

                        <div class="mb-3">
                            <table for="email" class="form-label">Email</table>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $login->email ?>">
                        </div>

                        <div class="mb-3">
                            <table for="password" class="form-label">Password</table>
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $login->password ?>">
                        </div>

                        <input type="hidden" value="<?php echo $login->id_login ?>" name="id_login">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_login.php" class="btn btn-secondary">Kembali</a>

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