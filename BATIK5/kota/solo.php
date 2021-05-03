<?php
include "../login/koneksi.php";
include "../section/header.php";
?>

<body style="margin: auto;">
  <div class="container containersolo" style="font-family: 'Lato', sans-serif;">
    <br>
    <h1 style="color: #9c6644; font-weight: bold; font-style: italic;">
      <center>SEPUTAR BATIK SOLO</center>
    </h1><br>
    <div class="row tablesolo">
      <div class="col">
        <h2 style="color: #9c6644;"><strong>Ciri Kain Batik Solo dan Keindahannya</strong></h2>
        <p>Ciri kain batik solo, Setiap daerah di Indonesia pasti memiliki corak batik tersendiri. Untuk daerah Solo atau Surakarta, apakah yang menjadi ciri khas dari batik Solo? Batik Solo terkenal dengan corak dan pola tradisionalnya batik dalam proses cap maupun dalam batik tulisnya. Bahan-bahan yang dipergunakan untuk pewarnaan masih tetap banyak memakai bahan-bahan dalam negeri seperti soga Jawa yang sudah terkenal sejak dari dahulu.</p>
        <p>Ada pula motif yang mengandung unsur agama pun menghiasi motif khas batik Solo. Semisal motif naga, burung garuda, serta sawat yang merupakan simbol agama Hindu. Untuk hal pewarnaan, batik Solo lebih didominasi warna hitam atau kecoklatan. Meskipun menggunakan warna putih tetap saja warna kecoklatan mendominasi pada motif batik.</p>
        <hr>
        <h4 style="color: #9c6644;"><strong>Beberapa ciri khasnya</strong></h4>
        <p>1. Batik Solo memiliki warna dominan cokelat soga kekuningan. <br> 2. Batik Solo memiliki ciri khas geometris pada batiknya. <br> 3. Ukuran motifnya yang kecil, atau istilahnya Truntum.</p>
        <hr>
        <p>Ciri kain batik Solo terkenal dengan corak dan pola tradisionalnya batik dalam proses maupun dalam batik tulisnya. Bahan-bahan yang dipergunakan untuk pewarnaan masih tetap banyak memakai bahan-bahan dalam negeri seperti soga Jawa yang sudah terkenal sejak dari dahulu. Polanya yang terkenal antara lain "Sidomukti" dan "Sidoluruh". Batik Solo memiliki warna dominan cokelat soga kekuningan. Batik Solo memiliki ciri khas geometris pada batiknya. Contohnya Sidomukti, Sidoluruh, dan Sidoasih. Selain motif geometris, ciri khas batik Solo adalah ukuran motifnya yang kecil, atau istilahnya Truntum.</p>

        <h4 style="color: #9c6644;"><strong>Ciri Kain Batik Solo, Sejarah dan Penjelasannya</strong></h4>
        <p>Selain dikenal dengan kekentalan adat Jawa, Solo juga dikenal sebagai ikon batik. Motif batik Solo yang dihasilkan pun beragam. Bahkan batik Solo kini lebih populer melalui BatikDlidir yang sudah merambah pangsa pasar luar negeri. Tidak mengherankan jika batik Solo menjadi salah satu tujuan yang wajib dikunjungi oleh para wisatawan ketika berkunjung ke kota Surakarta hadiningrat. Kammi juga memiliki pabrik produksi batik kami sendiri yang bertempat di Laweyan, Solo. Kegiatan membatik sudah menjadi budaya sehari-hari bagi masyarakatnya, dan biasanya diturunkan dari leluhurnya.
        </p>
      </div>
      <div class="col tablesolo" style="color: #9c6644;">
        <table class="table table-responsive-md table-striped">
          <center>
            <h2><strong>Data Penjual Batik</strong></h2>
          </center>

          <thead>
            <tr>
              <th scope="col">
                <center>No</center>
              </th>
              <th width="300px" scope="col">
                <center>Nama Penjual/Sentra</center>
              </th>
              <th scope="col">Kontak</th>
              <th scope="col">
                <center>Alamat</center>
              </th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php $result = mysqli_query($koneksi, "SELECT * FROM solo"); ?>
          <?php foreach ($result as $row) : ?>
            <tbody>
              <tr>
                <th style="width: 20px;"><?= $i; ?></th>
                <th style="width: 80px;"><?= $row['nama_penjual']; ?></th>
                <th style="width: 100px;"><?= $row['kontak']; ?></th>
                <th style="width: 400px;"><?= $row['alamat']; ?></th>
              </tr>
            </tbody>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>

  </div>
  <br>

  <?php
  include "../section/footer.php"
  ?>