<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Brave | Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/logo/logo-tr.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-primary">
            <img src="assets\img\logo\logo-tr.png" width="300">
            <h1 class="title fw-bold text-white mb-3">BRAVE</h1>
			<p class="subtitle text-white op-7">Be Braver with Us</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-#fbfbfb">
			<div class="container container-login container-transparent animated fadeIn">
				<form action="backend/action-login.php" method="post">
					<h3 class="text-center">Sign In</h3>
					<div class="login-form">
						
						<div class="form-group">
							<label for="username" class="placeholder"><b>Username</b></label>
							<input id="username" name="username" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password" class="placeholder"><b>Password</b></label>
							<!-- <a href="#" class="link float-right">Forget Password ?</a> -->
							<div class="position-relative">
								<input id="password" name="password" type="password" class="form-control" required>
								<div class="show-password">
									<i class="icon-eye"></i>
								</div>
							</div>
						</div>
						<div class="form-group form-action-d-flex mb-3">
							<button class="btn btn-primary">Log In</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>
</html>