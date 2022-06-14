 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DOSEN</title>
</head>
<body>
    <h2>DATA DOSEN</h2>
    <hr>
    <table>
        <tr>
            <td> <a href="dosen_add.php"> <button> + Tambah Data Dosen</button> </a> </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <th>no</th>
            <th>kode dosen</th>
            <th>nama dosen</th>
            <th>alamat</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php"; 
        $no = 1;
        $sql = mysqli_query($koneksi, "select * from tbl_dosen");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kd_dosen']; ?></td>
                <td><?php echo $data['nm_dosen']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="dosen_edit.php?id=<?php echo $data['kd_dosen'];?> ">Edit</a>
                    <a href="dosen_delete.php?kd_dosen=<?php echo $data['kd_dosen'];?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <table>
    <tr>
        <a href="admin_dashboard.php"> <button>Kembali Ke Menu Utama</button> </a>
    </tr>
    </table>
</body>
</html>