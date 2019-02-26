<?php
	session_start();

	if (isset($_SESSION['message'])) {
		if ($_SESSION['message']!="") {
			echo "<span 
			style='color:blue'>".$_SESSION['message']."</span>";
			$_SESSION['message'] = "";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<center>
	<div class="body">
	<h2 class="masuk">MASUK</h2>
	<form method="POST" action="ceklogin.php" class="form">
		<table>
			<tr>
				<td><input placeholder="username" type="text" name="username" class="username" required></td>
			</tr>
			<tr>
				<td><input placeholder="password" type="password" class="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="login" type = "submit" name="login">Login</button></td>
			</tr>
		</P>
		</table>
			<h4 class="h4">Belum Punya Akun? <br> <a href="register.php" class="a">Daftar Sekarang</a></h4>
			
	</form>
	</div>
	</center>
	</div>
</body>
</html>