<?php
include "connection.php";

$id_portfolio = $_GET['id_portfolio'];

$select_id = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE id_portfolio='$id_portfolio'");
$portfolio = mysqli_fetch_object($select_id);

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
                        <h1 class="h3 mb-0 text-gray-800">Update Portfolio</h1>
                    </div>

                    <!-- PERBAIKAN DI SINI -->
                    <form action="action_update_portfolio.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <table class="form-label">Title</table>
                            <input type="text" class="form-control" name="judul_portfolio" value="<?php echo $portfolio->judul_portfolio ?>">
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Image</table>

                            <!-- GANTI TEXT JADI FILE -->
                            <input type="file" class="form-control" name="img">

                            <!-- TAMBAHAN BIAR LIHAT FOTO LAMA -->
                            <br>
                            <img src="foto/<?php echo $portfolio->img ?>" width="100">
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Link</table>
                            <input type="text" class="form-control" name="link" value="<?php echo $portfolio->link ?>">
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Description</table>
                            <textarea name="deskripsi" class="form-control" rows="10"><?php echo $portfolio->deskripsi ?></textarea>
                        </div>

                        <div class="mb-3">
                            <table class="form-label">Type</table>
                            <input type="text" class="form-control" name="jenis" value="<?php echo $portfolio->jenis ?>">
                        </div>

                        <input type="hidden" value="<?php echo $portfolio->id_portfolio ?>" name="id_portfolio">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="tabel_portfolio.php" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>

            </div>

            <?php include "footer.php" ?>

        </div>

    </div>

    <?php include "bottom.php" ?>