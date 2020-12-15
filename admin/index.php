<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin Sekolah</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <!-- Cek pesan notifikasi -->
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal_login") {
            echo "<script>alert('nik atau password anda salah');</script>";
            } elseif ($_GET['pesan'] == "logout") {
            echo "<script>alert('Anda telah berhasil logout');</script>";
            } elseif ($_GET['pesan'] == "belum_login") {
            echo "<script>alert('Anda harus login untuk mengakses halaman ini');</script>";
            }
        }
        ?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Admin Sekolah</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4" type="text" name="user" placeholder="Ketikkan username" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" type="password" name="pass" placeholder="Ketikkan password" required/>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" class="btn btn-primary" name="login" value="login">
                                            </div>
                                        </form>

                                        <?php
                                        if (isset($_POST['login'])) {
                                            $user = mysqli_real_escape_string($koneksi, $_POST['user']);
                                            $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

                                            $login_system = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username = '$user' AND password = '$pass' AND status = 'aktif'");
                                            $get_user = mysqli_fetch_array($login_system);
                                            $username = $get_user['username'];
                                            $cek_user = mysqli_num_rows($login_system);

                                            if ($cek_user > 0) {
                                            // get session
                                            echo "<script>alert('Login berhasil');window.location='dist/index.php'</script>";
                                            $_SESSION['username'] = $username;
                                            $_SESSION['kondisi'] = "login";
                                            } else {
                                            echo "<script>alert('Username dan Password tidak terdaftar');window.location='index.php'</script>";
                                            }
                                        }
                                        ?>

                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
