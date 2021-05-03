<?php 
	session_start();
    if ($_SESSION['level'] == "") {
        header("location:../login/login_admin.php?pesan=gagal");
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<br><br>
<div class="container">
    <center><p>Hallo Anda telah login sebagai Admin</p></center>

        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="../kota/data_solo.php"> Solo </a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="#"> Cirebon </a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="#"> Pekalongan </a></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><a href="#"> Yogyakarta </a></td>
            </tr>
        </tbody>
        </table>
    <center><a href="../login/logout_admin.php">LOGOUT</a></center>
</div>
</body>
</html>
