<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/home.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/footer.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/aboutt.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/data_solo.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BATIK5/css/contact.css">
  <link rel="icon" href="http://localhost/BATIK5/img/logobatik.png">
  <title>Sentra Batik Indonesia</title>
</head>

<body style="overflow-x: hidden; width: 100%; background-color:#FFF1E6">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
      <img src="http://localhost/BATIK5/img/zona1.png" width="130" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/BATIK5/index.php">Home <span class="sr-only">(current)</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-collapse" href="?kota" id="navbarDropdown" role="button" data-toggle="dropdown">Kota</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            echo '<a class=dropdown-item href="http://localhost/BATIK5/kota/solo.php">Solo</a>';
            echo '<div class=dropdown-divider></div>';
            echo '<a class=dropdown-item href="http://localhost/BATIK5/kota/pekalongan.php">Pekalongan</a>';
            echo '<div class=dropdown-divider></div>';
            echo '<a class=dropdown-item href="http://localhost/BATIK5/kota/cirebon.php">Cirebon</a>';
            echo '<div class=dropdown-divider></div>';
            echo '<a class=dropdown-item href="http://localhost/BATIK5/kota/yogyakarta.php">Yogyakarta</a>';
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/BATIK5/pages/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/BATIK5/pages/contact.php">Contact Us</a>
        </li>
      </ul>
    </div>

  </nav>