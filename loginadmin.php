<!DOCTYPE html>
<html>
<head>
	<title>Pretest</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>- LOGIN ADMIN -</h1>
	<h2>Login Page</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	
	<form method="POST" action="cek_loginadmin.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
	</form>
	<br>
 <form>
<!-- <input type="button" class="tombol_regis" value="REGISTER" onclick="window.location.href='register.php'" />
</form>  -->
	
</body>
</html>