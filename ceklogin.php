<?php 

	include 'koneksi.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$register = $koneksi->prepare("SELECT * FROM users WHERE username='".$username."'");

		$register->execute();
		$hasil = $register->fetch(PDO::FETCH_OBJ) ;

		if (!empty($hasil)) {
			if ($hasil->password==$password) {
				
				$_SESSION['logged_in'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;

				header("location:index.php");

			}

		}else{

				$_SESSION['message'] = "Lu masukinnya salah!! maka Username dan password tidak sesuai";
				$_SESSION['logged_in'] = false;

				header("location:login.php");
			
		}
	}
 ?>