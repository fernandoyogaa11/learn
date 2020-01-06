<?php 

include('koneksi.php');
if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'admin'){
          $_SESSION['login'] = true; die();
        }else {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
		}
	}
	header('LOCATION:menu.html'); 
		?>