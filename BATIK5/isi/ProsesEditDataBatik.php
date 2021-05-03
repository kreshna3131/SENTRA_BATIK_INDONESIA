<?php
include '../login/koneksi.php';

global $koneksi;

if (isset($_POST['edit'])) {
    $id = $_POST["id"];
    $nama_penjual = $_POST["nama_penjual"];
    $kontak = $_POST["kontak"];
    $alamat = $_POST["alamat"];
    
    $query = "UPDATE solo SET nama_penjual = '$nama_penjual', kontak = '$kontak', alamat = '$alamat' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='../kota/data_solo.php';
        </script>";
    }
}

?>