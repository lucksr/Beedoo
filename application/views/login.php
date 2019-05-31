<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/libs/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/libs/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/application/public/libs/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/libs/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/libs/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/application/public/libs/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/application/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="/application/public/css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" autocomplete="off" method="post" action="/login">
					<span class="login100-form-title p-b-70">
						Beedoo Login
					</span>
					<span class="login100-form-avatar">
						<img src="/application/public/images/beebot-transparente-wiki.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" autocomplete="off" name="username" value="">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" autocomplete="off" name="pass" value="">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/application/public/libs/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/application/public/libs/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/application/public/libs/bootstrap/js/popper.js"></script>
	<script src="/application/public/libs/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/application/public/libs/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/application/public/libs/daterangepicker/moment.min.js"></script>
	<script src="/application/public/libs/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/application/public/libs/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>