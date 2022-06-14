<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DOSEN</title>
</head>
<body>
    <h2>Tambah Dosen</h2><br>
    <form method="post" action="aksi_add_dosen.php">
    <table>
    <tr>
        <td><label for="kd_dosen" >kode dosen</label></td>
        <td>:</td>
        <td><input type="text" name="kd_dosen" placeholder="masukkan kode dosen" required></td>
    </tr>
    <tr>
        <td><label for="nm_dosen" >nama dosen</label></td>
        <td>:</td>
        <td><input type="text" name="nm_dosen" placeholder="masukkan nama dosen" required></td>
    </tr>
    <tr>
        <td><label for="alamat" >Alamat Dosen</label></td>
        <td>:</td>
        <td> <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="SIMPAN"> <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'"></td>
    </tr>
    </table>
    </form>
</body>
</html>