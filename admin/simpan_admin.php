<?php

// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_login(username,password,status) VALUES ('$username','$password','pending')");
echo "<script>alert('Data berhasil tersimpan');window.location='index.php'</script>";
