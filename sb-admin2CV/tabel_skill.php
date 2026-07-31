<?php
include "connection.php";

$select_skill = mysqli_query($koneksi, "SELECT * FROM skill ORDER BY id_skill DESC");

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
                        <h1 class="h3 mb-0 text-gray-800">Skill</h1>
                    </div>

                    <!-- Content Start -->
                    <a href="form_skill.php" class="btn btn-info mb-2">Add</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Skill</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            if ($select_skill) :
                                while ($tampil = mysqli_fetch_object($select_skill)) :
                            ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $tampil->nama_skill; ?></td>
                                        <td>
                                            <a href="update_form_skill.php?id_skill=<?php echo $tampil->id_skill; ?>" class="btn btn-success">UPDATE</a>
                                            <a href="delete_skill.php?id_skill=<?php echo $tampil->id_skill; ?>" class="btn btn-danger" onclick="return confirm('confirm to delete?')">DELETE</a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>

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