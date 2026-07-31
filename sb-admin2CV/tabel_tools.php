<?php
include "connection.php";

$select_tools = mysqli_query($koneksi, "SELECT * FROM tools ORDER BY id_tools DESC");

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
                        <h1 class="h3 mb-0 text-gray-800">Tools</h1>
                    </div>

                    <!-- Content Start -->

                    <a href="form_tools.php" class="btn btn-info mb-2">Add</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tools</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            if ($select_tools) :
                                while ($tampil = mysqli_fetch_object($select_tools)) :
                            ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $tampil->nama; ?></td>

                                        <td>
                                            <i class="<?php echo $tampil->icon; ?>" style="font-size:40px;"></i> 
                                        </td>

                                        <td>
                                            <a href="update_form_tools.php?id_tools=<?php echo $tampil->id_tools; ?>" class="btn btn-success btn-sm">UPDATE</a>

                                            <a href="delete_tools.php?id_tools=<?php echo $tampil->id_tools; ?>" class="btn btn-danger btn-sm" onclick="return confirm('confirm to delete?')">DELETE</a>
                                        </td>
                                    </tr>

                            <?php
                                endwhile;
                            endif;
                            ?>

                        </tbody>
                    </table>

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