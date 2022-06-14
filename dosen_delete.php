<?php
//koneksi database
include 'koneksi.php';

//memangkap data id yang dikrim dari url
$kd_dosen = $_GET ['kd_dosen'];

//memghapus data dari database 
mysqli_query ($koneksi, "DELETE FROM tbl_dosen WHERE kd_dosen=$kd_dosen");

//mengalihkan halaman kembali ke index.php
header("location:dosen_list.php");

?>