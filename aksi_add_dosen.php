 <?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$kd_dosen       = $_POST['kd_dosen'];
$nm_dosen       = $_POST['nm_dosen'];
$alamat         = $_POST['alamat'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_dosen VALUES('$kd_dosen','$nm_dosen','$alamat')");


// mengalihkan halaman kembali ke dosen.php
header("location:dosen_list.php");

?>