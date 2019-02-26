<?php 

//register php

session_start();

if(isset($_SESSION['message'])){
	if($_SESSION['message']!=""){
		echo"<span
		style='color:red'>".$_SESSION['message']."</span>";
		$_SESSION['message']="";
	}
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>register</title>
 	<link rel="stylesheet" type="text/css" href="register.css">
 </head>
 <body>
 	<div class="bg.image">
 	<center>
 	<div class="body">
 		<h2 class="register">Daftar Bousque!</h2>
 			<form method="POST" action="cekregister.php">
 		<table>
 			<tr>
 				<td><input placeholder="username" type="text" name="username" class="username" required></td>
 			</tr>
 			<tr>
 				<td><input placeholder="password" type="password" name="password" class="password" required ></td>
 			</tr>
 			<tr>
 			<td></td>
 				<td><button type="submit" name="register" class="reg">Daftar</button></td>
 			</tr>
 		</table>
 			</form>
 	</div>
	</center>
	</div>
 </body>
 </html>
