<?php
	require 'backend/connection.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }else if($_SESSION['hak']!='admin'){
		header("Location: backend/action-logout.php");
	}else{
		$username = $_SESSION['username'];
		$login_id = $_SESSION['user_id'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Brave | Landing Page</title>
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
<body>
    <a href="dashboard-admin.php">Dashboard</a><br>
    <a href="list-user-admin.php">User</a><br>
    <a href="list-aduan-admin.php">Aduan</a><br>
    <a href="konsultasi-compose-admin.php">Tulis Konsultasi</a><br>
    <a href="konsultasi-inbox-admin.php">Pesan Konsultasi</a><br>
    <a href="feedback-compose-admin.php">Tulis Feedback</a><br>
    <a href="feedback-inbox-admin.php">Pesan Feedback</a><br>
    <a href="backend/action-logout.php">Logout</a><br>
</body>
</html>