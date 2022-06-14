<?php
//koneksi database
include "koneksi.php";

//menangkap data yang dikirim dari form
$kd_dosen = $_POST ['kd_dosen'];
$nm_dosen = $_POST ['nm_dosen'];
$alamat   = $_POST ['alamat'];

//update data ke database 
mysqli_query ($koneksi, "update tbl_dosen set kd_dosen ='$kd_dosen', nm_dosen='$nm_dosen', alamat='$alamat' where kd_dosen = '$kd_dosen'");

//mengalihkan halaman kembali ke index.php
header("location : dosen_list.php");
?>