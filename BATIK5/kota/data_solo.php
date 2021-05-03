<?php
include '../login/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_isi.css">
    <title>Data Zona Batik</title>
</head>

<body>
    <div class="utama">
            <h1 style="text-align: center;" class="head">Data Zona Batik Kota Solo</h1>
                <div class="tambah"><center><a href="../isi/InputDataBatik.php" class="tambah">Tambah Data Batik</a></center></div>
                <table border="1" style="margin: auto;" class="table">
                    <thead>
                        <tr>
                            <th>ID Penjual</th>
                            <th>Nama Penjual</th>
                            <th>Kontak Penjual</th>
                            <th>Alamat Penjual</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php $result = mysqli_query($koneksi, "SELECT * FROM solo"); ?>
                    <?php foreach ($result as $row) : ?>
                        <tbody>
                            <tr>
                                <th style="width: 40px;"><?= $row['id']; ?></th>
                                <th style="width: 100px;"><?= $row['nama_penjual']; ?></th>
                                <th style="width: 100px;"><?= $row['kontak']; ?></th>
                                <th style="width: 300px;"><?= $row['alamat']; ?></th>
                                <th style="width: 80px;">
                                    <a href="../isi/EditDataBatik.php?id=<?= $row['id']; ?>">Edit</a> |
                                    <a href="../isi/HapusDataBatik.php?id=<?= $row['id']; ?>"onclick="return confirm('Yakin?');">Hapus</a>
                                </th>
                            </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
                <br><br>
                <center><a href="../isi/Tampilan_admin.php">Kembali Ke Menu Kota</a></center>
    </div>
</body>

</html>