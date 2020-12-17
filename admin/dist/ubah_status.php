<?php
    include '../../koneksi.php';
    $id_admin = $_GET['id_admin'];
    $data = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_admin = '$id_admin'");
    while($d = mysqli_fetch_array($data)){
        $statuslama = $d['status']; 
    
    if($statuslama == 'pending'){
        $data = mysqli_query($koneksi, "UPDATE tb_login SET status = 'aktif' WHERE id_admin = '$id_admin'");
        echo "<script>alert('Status berhasil dirubah');window.location='dtadmin.php'</script>";
    }elseif($statuslama == 'aktif'){
        $data = mysqli_query($koneksi, "UPDATE tb_login SET status = 'pending' WHERE id_admin = '$id_admin'");
        echo "<script>alert('Status berhasil dirubah');window.location='dtadmin.php'</script>";
    }
}
?>