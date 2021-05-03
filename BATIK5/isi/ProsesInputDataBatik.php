<?php
error_reporting(0);
include '../login/koneksi.php';

global $koneksi;

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_penjual = $_POST['nama_penjual'];
    $kontak = $_POST['kontak'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO solo VALUES ('$id','$nama_penjual','$kontak','$alamat')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Ditambah !');
                window.location.href='../kota/data_solo.php';
            </script>";
    }
}