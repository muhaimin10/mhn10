<?php
	session_start();
	include '../koneksi.php'; 

		$user = $_POST['uname'];
		$pass = $_POST['pass'];

	$data = mysqli_query($koneksi, "SELECT* FROM admin WHERE username='$user' AND password='$pass'");
	
	if(mysqli_num_rows($data)>0){
		$akun = mysqli_fetch_assoc($data);
		$_SESSION['admin'] = $akun;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}else{
	header("location:index.php?pesan=gagal");
	}

?>