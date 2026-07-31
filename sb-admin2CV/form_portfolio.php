<?php include "header.php" ?>

<body id="page-top">

    <div id="wrapper">

        <?php include "sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include "topbar.php" ?>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Portfolio</h1>
                    </div>

                    <!-- PERBAIKANNYA DI SINI -->
                    <form action="action_insert_portfolio.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <table for="judul" class="form-label">Title</table>
                            <input type="text" class="form-control" id="judul" name="judul_portfolio">
                        </div>

                        <div class="mb-3">
                            <table for="img" class="form-label">Image</table>

                            <!-- GANTI TEXT JADI FILE AGAR FOTO MUNCUL-->
                            <input type="file" class="form-control" id="img" name="img">
                        </div>

                        <div class="mb-3">
                            <table for="link" class="form-label">Link</table>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>

                        <div class="mb-3">
                            <table for="deskripsi" class="form-label">Description</table>
                            <textarea name="deskripsi" id="deskripsi" cols="30" class="form-control" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <table for="jenis" class="form-label">Type</table>
                            <input type="text" class="form-control" id="jenis" name="jenis">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_portfolio.php" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>

            </div>

            <?php include "footer.php" ?>

        </div>

    </div>

    <?php include "bottom.php" ?>