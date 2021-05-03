<!DOCTYPE html>
<html>

<head>
  <title>Halaman admin</title>
</head>

<body>
  <?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['level'] == "") {
    header("location:login_admin.php?pesan=gagal");
  }

  ?>

  <div>
  <h1>Halaman Admin</h1>

  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <a href="logout_admin.php">LOGOUT</a>

  <br />
  <br />
  </div>

</body>

</html>