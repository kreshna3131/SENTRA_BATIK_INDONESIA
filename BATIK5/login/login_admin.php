<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT zonabatik FROM data_admin WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: ../isi/Tampilan_admin.php");
    exit;
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM data_admin WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            header("Location: ../isi/Tampilan_admin.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/style_admin.css">
</head>

<body>

    <h1>Halaman Login Admin Zona Batik</h1>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password ada tidak !! </div>";
        }
    }
    ?>

    <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>

    <form action="cek_login_admin.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

        <input type="submit" class="tombol_login" value="LOGIN">

        <br />
        <br />
    </form>
    </div>
</body>

</html>