<!DOCTYPE html>
<html lang="en">
<head>

	<title> Login | Media Diskusi </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

			<link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
			<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
			<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
			<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
			<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
			<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
			<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">

			<link rel="stylesheet" type="text/css" href="assets/css/util.css">
			<link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/bg-01.jpg');">
			<div class="wrap-login100">
				<?= $this->session->flashdata('message'); ?>
				
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log In With Your STIKI's Email
					</span>

					<div class="dropdown validate-input" data-validate = "Choose category">
							<select name="" id="" class="form-control">
							   <option value=""> User Categories </option>
							   <option value=""> Student </option>
							   <option value=""> Lecture </option>
							   <option value=""> Administration </option>
							</select>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="privacy">
						<label class="label-checkbox100" for="ckb1">
							Privacy Policy and Terms of Service
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-30">
						<a class="txt1" href="#">
							Copyrigth@2020 STIKI Malang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/select2/select2.min.js"></script>
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
	<script src="assets/js/mainlogin.js"></script>

</body>
</html>