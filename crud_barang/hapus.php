<?php
include 'config/db.php';
$kode = $_GET['kode'];
mysqli_query($koneksi, "DELETE FROM db_barang WHERE kode='$kode'");
header("Location: index.php");
?>