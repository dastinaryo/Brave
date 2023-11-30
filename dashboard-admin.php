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
	<title>Brave | Daftar Users</title>
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

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper fullheight-side">
		<!-- Logo Header -->
		<div class="logo-header position-fixed" data-background-color="blue">

			<a href="index.html" class="logo">
				<img src="assets\img\logo\logo2-2tr-resize.png" alt="navbar brand" class="navbar-brand" style="width:110px;"> <!-- DIGANTI DENGAN LOGO BRAVE -->
			</a>
			<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="icon-menu"></i>
				</span>
			</button>
			<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			<div class="nav-toggle">
				<button class="btn btn-toggle toggle-sidebar">
					<i class="icon-menu"></i>
				</button>
			</div>
		</div>
		<!-- End Logo Header -->	
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="blue">	
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $_SESSION['username'] ?>
									<span class="user-level">Admin</span>
									<span class="caret"></span>
								</span>
							</a>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="backend/action-logout.php">
											<span class="link-collapse">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="dashboard-admin.php" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Layanan</h4>
						</li>
						<li class="nav-item">
							<a href="list-user-admin.php">
								<i class="fas fa-file-contract"></i>
								<p>Daftar Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="list-aduan-admin.php">
								<i class="fas fa-file-contract"></i>
								<p>Daftar Aduan</p>
							</a>
						</li>
						<li class="nav-item submenu">
							<a data-toggle="collapse" href="#email-app-nav">
								<i class="far fa-envelope"></i>
								<p>Konsultasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="email-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="konsultasi-inbox-admin.php">
											<span class="sub-item">Konsultasi Masuk</span>
										</a>
									</li>
									<li>
										<a href="konsultasi-compose-admin.php">
											<span class="sub-item">Konsultasi Terkirim</span>
										</a>
									</li>
									<li>
										<a href="konsultasi-compose-admin.php">
											<span class="sub-item">Tulis Konsultasi</span>
										</a>
									</li>
								</ul>
							</div>
							<li class="nav-item ">
							<a data-toggle="collapse" href="#feedback-app-nav">
								<i class="far fa-comment"></i>
								<p>Feedback</p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="feedback-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="feedback-inbox-admin.php">
											<span class="sub-item">Feedback Terkirim</span>
										</a>
									</li>
									<li>
										<a href="feedback-compose-admin.php">
											<span class="sub-item">Tulis Feedback</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- Navbar Header -->
		<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg">

			<div class="container-fluid">
				<div class="collapse" id="search-nav">
					<form class="navbar-left navbar-form nav-search mr-md-3">
						<h4 class="page-title" style="margin: 10px 0; font-size: 27px;">Selamat Datang!</h4>
					</form>
				</div>
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					<li class="nav-item dropdown hidden-caret">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
							<div class="avatar-sm">
								<img src="assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
							</div>
						</a>
						<ul class="dropdown-menu dropdown-user animated fadeIn">
							<div class="dropdown-user-scroll scrollbar-outer">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="assets/img/profile.png" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4><?php echo $_SESSION['username'] ?></h4>
											<a href="/backend/action-logout.php" class="btn btn-xs btn-secondary btn-sm">Log Out</a>
										</div>
									</div>
								</li>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->

		<div class="main-panel full-height" >
			<div class="container" style="height:100%;">
				<div class="page-inner">
					<div class="row">
						<?php
							include "backend/connection.php";
							$user_id = $_SESSION['user_id'];
							$users_result = mysqli_query($koneksi, "SELECT * FROM users");
							$pengaduan_result = mysqli_query($koneksi, "SELECT * FROM pengaduan");
							$konsultasi_result = mysqli_query($koneksi, "SELECT * FROM konsultasi WHERE penerima = '$user_id'");
							
							if (!$users_result) {
								die('Error in SQL query: ' . mysqli_error($koneksi));
							}
							
							$users_count = 0;
							$pengaduan_count = 0;
							$konsultasi_count = 0;

							while ($count = mysqli_fetch_array($users_result)) {
								$users_count++;
							}

							while ($count = mysqli_fetch_array($pengaduan_result)) {
								$pengaduan_count++;
							}
							
							while ($count = mysqli_fetch_array($konsultasi_result)) {
								$konsultasi_count++;
							}

							echo '
								<div class="col-sm-6 col-md-4">
									<div class="card card-stats card-round" style="padding:30px 15px;">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon-big text-center">
														<!-- <i class="flaticon-chart-pie text-warning"></i> -->
														<img src="assets/img/icon/users.png" alt="..." style="height:80px;">
													</div>
												</div>
												<div class="col-6 col-stats">
													<div class="numbers">
														<p class="card-category">Pengguna</p>
														<h4 class="card-title">' . $users_count . '</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="card card-stats card-round" style="padding:30px 15px;">
										<div class="card-body ">
											<div class="row">
												<div class="col-6">
													<div class="icon-big text-center">
														<img src="assets/img/icon/complaint.png" alt="..." style="height:80px;">
													</div>
												</div>
												<div class="col-6 col-stats">
													<div class="numbers">
														<p class="card-category">Aduan</p>
														<h4 class="card-title">' . $pengaduan_count . '</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="card card-stats card-round" style="padding:30px 15px;">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon-big text-center">
														<img src="assets/img/icon/consultation.png" alt="..." style="height:80px;">
													</div>
												</div>
												<div class="col-6 col-stats">
													<div class="numbers">
														<p class="card-category">Konsultasi</p>
														<h4 class="card-title">' . $konsultasi_count . '</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							';
						?>
					</div>

					<div class="row">
						<div class="col-sm-6 col-md-12">
							<div class="card card-stats card-round" style="padding:30px 15px;">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<h2 class="card-title" style="font-size:25px;">Undang-Undang Perlindungan Korban Pelecehan Seksual</h2><br>
												<p class="card-category">Indonesia memiliki undang-undang yang bertujuan melindungi warganya dari pelecehan seksual. Undang-undang tersebut memberikan definisi yang jelas tentang tindakan pelecehan seksual, serta menetapkan sanksi yang tegas bagi pelakunya.</p><br>
												
												<h4 class="card-title" style="font-size:15px;">1. Undang-Undang Nomor 23 Tahun 2002 tentang Perlindungan Anak:</h4>
												<p class="card-category">Pasal 81C: Menyatakan bahwa setiap orang dilarang melakukan tindakan yang merendahkan martabat anak, termasuk pelecehan seksual.</p><br>

												<h4 class="card-title" style="font-size:15px;">2. Undang-Undang Nomor 35 Tahun 2014 tentang Perubahan Atas Undang-Undang Nomor 23 Tahun 2002 tentang Perlindungan Anak:</h4>
												<p class="card-category">Undang-undang ini menguatkan ketentuan perlindungan anak, termasuk sanksi yang lebih tegas terhadap pelaku pelecehan seksual terhadap anak.</p><br>
												
												<h4 class="card-title" style="font-size:15px;">3. Undang-Undang Nomor 4 Tahun 1979 tentang Ketentuan-Ketentuan Pokok Kekuasaan Kehakiman (KUHAP):</h4>
												<p class="card-category">Pasal 289: Menyatakan bahwa setiap orang yang merasa dirugikan oleh tindak pidana dapat melaporkannya kepada aparat penegak hukum.</p><br>

												<h4 class="card-title" style="font-size:15px;">4. Undang-Undang Nomor 11 Tahun 2012 tentang Sistem Peradilan Pidana Anak:</h4>
												<p class="card-category">Undang-undang ini mengatur sistem peradilan pidana khusus untuk anak, termasuk tindakan pelecehan seksual terhadap anak.</p><br>

												<h4 class="card-title" style="font-size:15px;">5. Undang-Undang Nomor 7 Tahun 1984 tentang Pengesahan Convention on the Elimination of All Forms of Discrimination Against Women (CEDAW):</h4>
												<p class="card-category">Meskipun lebih berfokus pada pemberantasan diskriminasi terhadap perempuan, undang-undang ini dapat digunakan sebagai dasar hukum untuk melawan pelecehan seksual.</p><br>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://web.facebook.com">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
										<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.instagram.com/">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
										<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
									</svg>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.linkedin.com">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
										<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
									</svg>
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2023 Copyright @ <a href="#">Brave</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

	<!-- Bootstrap Toggle -->
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Owl Carousel -->
	<script src="assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

	<!-- Magnific Popup -->
	<script src="assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
	<script src="assets/js/demo.js"></script>
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#177dff',
			fillColor: 'rgba(23, 125, 255, 0.14)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#f3545d',
			fillColor: 'rgba(243, 84, 93, .14)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
</body>
</html>