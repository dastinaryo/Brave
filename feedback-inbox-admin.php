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
	<title>Brave | Feedback Terkirim</title>
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
									<?php echo $username;?>
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
						<li class="nav-item">
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
						<li class="nav-item">
							<a data-toggle="collapse" href="#email-app-nav">
								<i class="far fa-envelope"></i>
								<p>Konsultasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="email-app-nav">
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
							<li class="nav-item nav-item active submenu">
							<a data-toggle="collapse" href="#feedback-app-nav">
								<i class="far fa-comment"></i>
								<p>Feedback</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="feedback-app-nav">
								<ul class="nav nav-collapse">
									<li class="active">
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
						<!-- <li class="nav-item">
							<a href="starter-template.html">
								<i class="fas fa-print"></i>
								<p>IPO Report</p>
							</a>
						</li> -->
						<!-- <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Snippets</h4>
						</li>
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#email-app-nav">
								<i class="far fa-envelope"></i>
								<p>Email</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="email-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="email-inbox.html">
											<span class="sub-item">Inbox</span>
										</a>
									</li>
									<li class="active">
										<a href="email-compose.html">
											<span class="sub-item">Email Compose</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li> -->
						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#messages-app-nav">
								<i class="far fa-paper-plane"></i>
								<p>Messages App</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="messages-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="messages.html">
											<span class="sub-item">Messages</span>
										</a>
									</li>
									<li>
										<a href="conversations.html">
											<span class="sub-item">Conversations</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="projects.html">
								<i class="fas fa-file-signature"></i>
								<p>Projects</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="boards.html">
								<i class="fas fa-th-list"></i>
								<p>Boards</p>
								<span class="badge badge-count">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="invoice.html">
								<i class="fas fa-file-invoice-dollar"></i>
								<p>Invoices</p>
								<span class="badge badge-count">6</span>
							</a>
						</li> -->
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
					<li class="nav-item toggle-nav-search hidden-caret">
						<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
							<i class="fa fa-search"></i>
						</a>
					</li>
					<!-- <li class="nav-item dropdown hidden-caret">
						<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-envelope"></i>
						</a>
						<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
							<li>
								<div class="dropdown-title d-flex justify-content-between align-items-center">
									Messages 									
									<a href="#" class="small">Mark all as read</a>
								</div>
							</li>
							<li>
								<div class="message-notif-scroll scrollbar-outer">
									<div class="notif-center">
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/jm_denis.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="subject">Jimmy Denis</span>
												<span class="block">
													How are you ?
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/chadengle.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="subject">Chad</span>
												<span class="block">
													Ok, Thanks !
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/mlane.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="subject">Jhon Doe</span>
												<span class="block">
													Ready for the meeting today...
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/talha.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="subject">Talha</span>
												<span class="block">
													Hi, Apa Kabar ?
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</div>
							</li>
							<li>
								<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
					</li> -->
					<!-- <li class="nav-item dropdown hidden-caret">
						<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bell"></i>
							<span class="notification">4</span>
						</a>
						<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
							<li>
								<div class="dropdown-title">You have 4 new notification</div>
							</li>
							<li>
								<div class="notif-center">
									<a href="#">
										<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
										<div class="notif-content">
											<span class="block">
												New user registered
											</span>
											<span class="time">5 minutes ago</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
										<div class="notif-content">
											<span class="block">
												Rahmad commented on Admin
											</span>
											<span class="time">12 minutes ago</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-img"> 
											<img src="assets/img/profile2.jpg" alt="Img Profile">
										</div>
										<div class="notif-content">
											<span class="block">
												Reza send messages to you
											</span>
											<span class="time">12 minutes ago</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
										<div class="notif-content">
											<span class="block">
												Farrah liked Admin
											</span>
											<span class="time">17 minutes ago</span> 
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
							</li>
						</ul>
					</li> -->
					<!-- <li class="nav-item dropdown hidden-caret">
						<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
							<i class="fas fa-layer-group"></i>
						</a>
						<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
							<div class="quick-actions-header">
								<span class="title mb-1">Quick Actions</span>
								<span class="subtitle op-8">Shortcuts</span>
							</div>
							<div class="quick-actions-scroll scrollbar-outer">
								<div class="quick-actions-items">
									<div class="row m-0">
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-danger rounded-circle">
													<i class="far fa-calendar-alt"></i>
												</div>
												<span class="text">Calendar</span>
											</div>
										</a>
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-warning rounded-circle">
													<i class="fas fa-map"></i>
												</div>
												<span class="text">Maps</span>
											</div>
										</a>
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-info rounded-circle">
													<i class="fas fa-file-excel"></i>
												</div>
												<span class="text">Reports</span>
											</div>
										</a>
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-success rounded-circle">
													<i class="fas fa-envelope"></i>
												</div>
												<span class="text">Emails</span>
											</div>
										</a>
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-primary rounded-circle">
													<i class="fas fa-file-invoice-dollar"></i>
												</div>
												<span class="text">Invoice</span>
											</div>
										</a>
										<a class="col-6 col-md-4 p-0" href="#">
											<div class="quick-actions-item">
												<div class="avatar-item bg-secondary rounded-circle">
													<i class="fas fa-credit-card"></i>
												</div>
												<span class="text">Payments</span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li> -->
					<!-- <li class="nav-item">
						<a href="#" class="nav-link quick-sidebar-toggler">
							<i class="fa fa-th"></i>
						</a>
					</li> -->
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
											<h4><?php echo $username;?></h4>
											<a href="backend/action-logout.php" class="btn btn-xs btn-secondary btn-sm">Log Out</a>
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

		<div class="main-panel full-height">
			<div class="container container-full">
				<div class="page-inner">
					<div class="page-with-aside mail-wrapper bg-white">
					<div class="page-aside">
							<div class="aside-header">
								<div class="title">Feedback Service</div>
								<div class="description">Service Description</div>
								<a class="btn btn-primary toggle-email-nav" data-toggle="collapse" href="#email-nav" role="button" aria-expanded="false" aria-controls="email-nav">
									<span class="btn-label">
										<i class="icon-menu"></i>
									</span>
									Menu
								</a>
							</div>
							<div class="aside-nav collapse" id="email-nav">
								<ul class="nav">
									<li class="active">
										<a href="feedback-inbox-admin.php">
											<i class="flaticon-inbox"></i> Feedback Terkirim
										</a>
									</li>
									<li>
										<a href="feedback-compose-admin.php">
											<i class="fa fa-envelope"></i> Tulis Feedback
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="page-content mail-content">
							<div class="inbox-head d-lg-flex d-block">
								<h3>Feedback</h3>
								<form action="#" class="ml-auto">
									<div class="input-group">
										<input type="text" placeholder="Search Topik" class="form-control">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="fa fa-search search-icon"></i>
											</span>
										</div>
									</div>
								</form>
							</div>
							<div class="inbox-body" style="padding-top:0;">
								<div class="email-list">
									<?php
									// Fetch messages from the konsultasi table
									$sql_feedback = "SELECT * FROM feedback ORDER BY tgl_feedback DESC";
									$result_feedback = mysqli_query($koneksi, $sql_feedback);

									// Check if there are any messages
									if (mysqli_num_rows($result_feedback) > 0) {
										// Loop through each row and display the messages
										while ($row_feedback = mysqli_fetch_assoc($result_feedback)) {
											$id_pengaduan=$row_feedback['id_pengaduan'];
											$sql_pengaduan = "SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'";
											$result_pengaduan = mysqli_query($koneksi, $sql_pengaduan);
											$row_pengaduan = mysqli_fetch_assoc($result_pengaduan);

											echo '
												<div class="email-list-item">
													<div class="email-list-detail" data-toggle="modal" data-target="#feedback-' . $row_feedback['id_feedback'] . '">
														<span class="date float-right">
															' . date("d M", strtotime($row_feedback['tgl_feedback'] )). '
														</span>
														
														<span class="from">' .  $row_feedback['nama']. '</span>
														<p class="msg">' . $row_pengaduan['judul'] . '</p>
													</div>
													<div id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:sky blue; margin-left:5px; margin-right:-17px;">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
															<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
														</svg>
													</div>
													<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" data-toggle="modal" data-target="#edit-feedback-' . $row_feedback['id_feedback'] . '">Edit</a>
														<a class="dropdown-item" href="backend/action-delete-feedback.php?id=' . $row_feedback['id_feedback'] . '">Delete</a>
													</div>
												</div>
												
												<!-- Modal for feedback -->
												<div class="modal fade" id="feedback-' . $row_feedback['id_feedback'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle" style="font-size:20px;">' . $row_pengaduan['judul'] . '</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body" style="text-align:justify;">
																<p style="margin-bottom:1px;"><strong>Nama :</strong> ' . $row_feedback['nama'] . '</p>
																<p style="margin-bottom:10px;"><strong>Tanggal Feedback:</strong> ' . date("d M Y", strtotime($row_feedback['tgl_feedback'])) . '</p>
																Feedback : ' . $row_feedback['alasan'] . '
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
															</div>
														</div>
													</div>
												</div>

												<!-- Modal for edit feedback -->
												<div class="modal fade" id="edit-feedback-' . $row_feedback["id_feedback"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="editUserModalLabel">Tolak Pengaduan </h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<!-- Form for edit feedback -->
																<form id="editFeedbackForm-' . $row_feedback['id_feedback'] . '" action="backend/action-edit-feedback.php" method="post">
																	<input type="text" class="form-control" id="id_feedback" name="id_feedback" value="' . $row_feedback["id_feedback"] . '" required hidden>
																	<div class="form-group">
																		<label for="alasan">Feedback:</label>
																		<input type="text" class="form-control" id="alasan" name="alasan" value="' . $row_feedback["alasan"] . '" required>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary" onclick="editFeedback_' . $row_feedback["id_feedback"] . '()">Edit</button>
															</div>
														</div>
													</div>
												</div>
												<script>
													function editFeedback_' . $row_feedback["id_feedback"] . '() {
														// Submit the form when the "Decline aduan" button is clicked
														document.getElementById("editFeedbackForm-' . $row_feedback["id_feedback"] . '").submit();
													}
												</script>
												';
										}
									} else {
										echo "No messages found.";
									}

									// Close the database connection
									mysqli_close($koneksi);
									?>
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
	<!-- Bootstrap Toggle -->
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo.js"></script>
</body>
</html>