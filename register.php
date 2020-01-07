<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pretst</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

                <form method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" type="text" id="username" name="username" placeholder="uername">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btn-login" onClick="return false;">Submit</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script>
$(document).ready(function(){
	$('#btn-login').click(function(){
		var username = $('#username').val();
		var password = $('#password').val();
		
		$.ajax({
                    url : 'http://localhost/learn/registeruser.php',
                    data: JSON.stringify({
                        "username" : username,
                        "password" : password
                    }),
                    type: 'POST',
					data:'username='+ username + '&password='+ password ,
                    success: function(pesan){

						if(pesan.status == 200){
							Swal.fire({
  						icon: 'success',
  						title: pesan.message,
						})
							setInterval(function(){
								window.location.href = 'index.php';
							},2000);
 
						}else{
							Swal.fire({
  						icon: 'error',
  						title: pesan.message,
						})
						}
						
                    } 
                });
	});
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>