<?php
session_start();
session_destroy();
echo "<script>alert('Anda telah logout dari halaman admin');window.location='../index.php'</script>";
?>