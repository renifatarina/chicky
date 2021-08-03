<?php
    include "config.php";

    $nama = $_GET['nama'];
    $sql = "DELETE FROM contact WHERe nama = '$nama'";
    $hasil = mysqli_query($config, $sql);
?>
<br>Data berhasil dihapus. 
<br> Tekan <a href="halamanadmin.php"> admin </a>untuk kembali.
