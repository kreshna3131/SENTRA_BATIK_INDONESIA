<?php
include '../login/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM solo WHERE id = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $nama_penjual = $row["nama_penjual"];
        $kontak = $row["kontak"];
        $alamat = $row["alamat"];
    }
} else {
    header("Location: ../kota/data_solo.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data Batik Solo</title>
</head>

<body>
<div class="input">
    <form action="ProsesEditDataBatik.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset class="dua">
            <center><legend>
                <h3>Data Batik Solo</h3>
            </legend></center>
            <center><div class="isi"><table>
                <tr>
                    <th>ID</th>
                    <th>:</th>
                    <th><input type="text" name="id" id="id" size="50" maxlength="15" value="<?= $id; ?>" readonly></th>
                </tr>
                <tr>
                    <th>Nama Penjual</th>
                    <th>:</th>
                    <th><input type="text" name="nama_penjual" id="nama_penjual" size="50" value="<?= $nama_penjual; ?>"></th>
                </tr>
                <tr>
                    <th>kontak</th>
                    <th>:</th>
                    <th><input type="text" name="kontak" id="kontak" size="50" value="<?= $kontak; ?>"></th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <th><input type="text" name="alamat" id="alamat" size="50" value="<?= $alamat; ?>"></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>
                        <button type="submit" name="edit" id="edit">Edit</button>
                    </th>
                </tr>
            </table></center></div>
        </fieldset>
    </form>
</div>
</body>

</html>