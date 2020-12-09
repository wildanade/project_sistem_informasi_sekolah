<?php

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nm_lengkap = mysqli_real_escape_string($koneksi, $_POST['nm_lengkap']);
$jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
$tmpt_lahir = mysqli_real_escape_string($koneksi, $_POST['tmpt_lahir']);
$tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
$agama = mysqli_real_escape_string($koneksi, $_POST['agama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$nm_ayah = mysqli_real_escape_string($koneksi, $_POST['nm_ayah']);
$pekerjaan_ayah = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']);
$no_ayah = mysqli_real_escape_string($koneksi, $_POST['no_ayah']);
$nm_ibu = mysqli_real_escape_string($koneksi, $_POST['nm_ibu']);
$pekerjaan_ibu = mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ibu']);
$no_ibu = mysqli_real_escape_string($koneksi, $_POST['no_ibu']);
$penghasilan_ortu = mysqli_real_escape_string($koneksi, $_POST['penghasilan_ortu']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_pendaftaran(nm_lengkap,jk,tmpt_lahir,tgl_lahir,agama,alamat,nm_ayah,pekerjaan_ayah,no_ayah,nm_ibu,pekerjaan_ibu,no_ibu,penghasilan_ortu) VALUES ('$nm_lengkap','$jk','$tmpt_lahir','$tgl_lahir','$agama','$alamat','$nm_ayah','$pekerjaan_ayah','$no_ayah','$nm_ibu','$pekerjaan_ibu','$no_ibu','$penghasilan_ortu')");
echo "<script>alert('Data berhasil tersimpan');window.location='index.php'</script>";
