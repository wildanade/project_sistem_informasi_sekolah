<?php
session_start();
if ($_SESSION['kondisi'] != "login") {
  header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Website Sistem Informasi Sekolah Gema Akbar Sentosa</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Halaman Administrator</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php include "menu.php"; ?>
                    <div class="sb-sidenav-footer">
                        <div class="small">Nama Admin :</div>
                        <p class="text-gray-800">
                        <!-- Page Heading -->
                        <?php
                        $username = $_SESSION['username'];
                        echo $username;
                        ?>
                        </p>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Detail Pendaftar</h1>
                        <div class="card mb-4">             
                        <div class="card-header">
                        </div>               
                            <div class="card-body">
                                <div class="list-group">
                                <?php
                                $id_pendaftar = $_GET['id_pendaftar'];
                                include "../../koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM tb_pendaftaran WHERE id_pendaftar = '$id_pendaftar'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                
                                <h2 class="list-group-item bg-success text-white">
                                    <?php echo 'Nama : '.$d['nm_lengkap']; ?> 
                                </h2>
                                <p class="list-group-item"><?php echo 'Jenis Kelamin : '.$d['jk']; ?></p>
                                <p class="list-group-item"><?php echo 'Tempat Lahir : '.$d['tmpt_lahir']; ?></p>
                                <p class="list-group-item"><?php echo 'Tanggal Lahir : '.$d['tgl_lahir']; ?></p>
                                <p class="list-group-item"><?php echo 'Agama : '.$d['agama']; ?></p>
                                <p class="list-group-item"><?php echo 'Alamat : '.$d['alamat']; ?></p>
                                <p class="list-group-item"><?php echo 'Nama Ayah : '.$d['nm_ayah']; ?></p>
                                <p class="list-group-item"><?php echo 'Pekerjaan Ayah : '.$d['pekerjaan_ayah']; ?></p>
                                <p class="list-group-item"><?php echo 'Nomor Ayah : '.$d['no_ayah']; ?></p>
                                <p class="list-group-item"><?php echo 'Nama Ibu : '.$d['nm_ibu']; ?></p>
                                <p class="list-group-item"><?php echo 'Pekerjaan Ibu : '.$d['pekerjaan_ibu']; ?></p>
                                <p class="list-group-item"><?php echo 'Nomor Ibu : '.$d['no_ibu']; ?></p>
                                <p class="list-group-item"><?php echo 'Penghasilan Orang Tua : '.$d['penghasilan_ortu']; ?></p>

                                <?php } ?>
                                
                                </div>
                            </div>

                            <a href="dtpendaftar.php" class="btn btn-primary">Kembali</a></td>

                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>