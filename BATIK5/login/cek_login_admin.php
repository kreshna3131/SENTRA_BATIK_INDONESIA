<?php
session_start();

include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM data_admin WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../isi/Tampilan_admin.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login_admin.php?pesan=gagal");
	}

	
}else{
	header("location:login_admin.php?pesan=gagal");
}

?>