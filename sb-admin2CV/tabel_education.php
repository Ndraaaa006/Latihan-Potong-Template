<?php
include "connection.php";

// ambil data education
$select_education = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id_education DESC");
?>

<?php include "header.php" ?>

<body id="page-top">

<div id="wrapper">

    <?php include "sidebar.php" ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?php include "topbar.php" ?>

            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Education</h1>
                </div>

                <a href="form_education.php" class="btn btn-info mb-2">Add</a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Major</th>
                            <th>Year</th>
                            <th>Place</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if (mysqli_num_rows($select_education) > 0) { ?>
                        
                        <?php while ($tampil = mysqli_fetch_object($select_education)) { ?>
                            
                            <tr>
                                <td><?= $tampil->nama_jurusan; ?></td>
                                <td><?= $tampil->tahun_belajar; ?></td>
                                <td><?= $tampil->tempat_belajar; ?></td>
                                <td><?= $tampil->deskripsi; ?></td>

                                <td>
                                    <a href="delete_education.php?id_education=<?= $tampil->id_education; ?>"
                                       class="btn btn-danger"
                                       onclick="return confirm('Confirm to delete?')">
                                       DELETE
                                    </a>

                                    <a href="update_form_education.php?id_education=<?= $tampil->id_education; ?>"
                                       class="btn btn-success">
                                       UPDATE
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>

                    <?php } else { ?>

                        <tr>
                            <td colspan="5" class="text-center">Data tidak ada</td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>

            </div>

        </div>

        <?php include "footer.php" ?>

    </div>

</div>

<?php include "bottom.php" ?>