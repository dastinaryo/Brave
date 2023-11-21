<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Brave | Berani, Responsif, Adil, Verifikasi, Efektif.</title>
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
									Username
									<span class="user-level">Admin</span>
									<span class="caret"></span>
								</span>
							</a>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="action-logout.php">
											<span class="link-collapse">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
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
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#email-app-nav">
								<i class="far fa-envelope"></i>
								<p>Konsultasi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="email-app-nav">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="konsultasi-inbox-admin.php">
											<span class="sub-item">Pesan Masuk</span>
										</a>
									</li>
									<li>
										<a href="konsultasi-compose-admin.php">
											<span class="sub-item">Tulis Konsultasi</span>
										</a>
									</li>
									<li>
										<a href="email-detail.html">
											<span class="sub-item">Email Detail</span>
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
							<div class="collapse" id="feedback-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="feedback-inbox-admin.php">
											<span class="sub-item">Feedback Masuk</span>
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
									<li>
										<a href="email-detail.html">
											<span class="sub-item">Email Detail</span>
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
											<h4>Username</h4>
											<p class="text-muted">NIM : </p><a href="action-logout.php" class="btn btn-xs btn-secondary btn-sm">Log Out</a>
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
								<div class="title">Mail Service</div>
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
										<a href="konsultasi-inbox-admin.php">
											<i class="flaticon-inbox"></i> Inbox
											<span class="badge badge-primary float-right">8</span>
										</a>
									</li>
									<li>
										<a href="konsultasi-compose-admin.php">
											<i class="fa fa-envelope"></i> Sent Mail
										</a>
									</li>
									<!-- <li>
										<a href="#">             
											<i class="flaticon-exclamation"></i> Important
											<span class="badge badge-secondary float-right">4</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-envelope-3"></i> Drafts
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-price-tag"></i> Tags
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-interface-5"></i> Trash
										</a>
									</li> -->

								</ul>

								<!-- <span class="label">Labels</span>
								<ul class="nav nav-pills nav-stacked">
									<li>
										<a href="#">
											<i class="flaticon-inbox"></i> Inbox
											<span class="badge badge-primary float-right">8</span>
										</a>
									</li>
									<li class="active">
										<a href="#">
											<i class="fa fa-envelope"></i> Sent Mail
										</a>
									</li>
									<li>
										<a href="#">             
											<i class="flaticon-exclamation"></i> Important
											<span class="badge badge-secondary float-right">4</span>
										</a>
									</li>
								</ul> -->
								<!-- <div class="aside-compose"><a href="#" class="btn btn-primary btn-block fw-mediumbold">Compose Email</a></div> -->
							</div>
						</div>
						<div class="page-content mail-content">
							<div class="inbox-head d-lg-flex d-block">
								<h3>Pesan Masuk</h3>
								<form action="#" class="ml-auto">
									<div class="input-group">
										<input type="text" placeholder="Search Email" class="form-control">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="fa fa-search search-icon"></i>
											</span>
										</div>
									</div>
								</form>
							</div>
							<div class="inbox-body">
								<div class="mail-option">
									<div class="email-filters-left">
										<div class="chk-all">
											<div class="btn-group btn-group-sm">
												<div class="form-check">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button data-toggle="dropdown" type="button" class="btn btn-secondary btn-border dropdown-toggle"> With selected </button>
											<div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Mark as read</a><a href="#" class="dropdown-item">Mark as unread</a><a href="#" class="dropdown-item">Spam</a>
												<div class="dropdown-divider"></div><a href="#" class="dropdown-item">Delete</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-secondary btn-border">Archive</button>
											<button type="button" class="btn btn-secondary btn-border">Span</button>
											<button type="button" class="btn btn-secondary btn-border">Delete</button>
										</div>
										<div class="btn-group btn-group-sm">
											<button data-toggle="dropdown" type="button" class="btn btn-secondary btn-border dropdown-toggle" aria-expanded="false">Order by </button>
											<div role="menu" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Date</a><a href="#" class="dropdown-item">From</a><a href="#" class="dropdown-item">Subject</a>
												<div class="dropdown-divider"></div><a href="#" class="dropdown-item">Size</a>
											</div>
										</div>
									</div>

									<div class="email-filters-right ml-auto"><span class="email-pagination-indicator">1-50 of 213</span>
										<div class="btn-group btn-group-sm ml-3">
											<button type="button" class="btn btn-secondary btn-border"><i class="fa fa-angle-left"></i></button>
											<button type="button" class="btn btn-secondary btn-border"><i class="fa fa-angle-right"></i></button>
										</div>
									</div>
								</div>

								<div class="email-list">
									<div class="email-list-item unread">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star1" value="1">
													<label for="star1">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail">
											<span class="date float-right"><i class="fa fa-paperclip paperclip"></i> 28 Jul</span><span class="from">Google Webmaster</span>
											<p class="msg">Improve the search presence of WebSite</p>
										</div>
									</div>
									<div class="email-list-item unread">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star2" value="1" checked>
													<label for="star2">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail"><span class="date float-right"></span><span class="date float-right"><i class="fa fa-paperclip paperclip"></i> 13 Jul</span><span class="from">	PHPClass</span>
											<p class="msg">Learn Laravel Videos Tutorial</p>
										</div>
									</div>
									<div class="email-list-item">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star6" value="1">
													<label for="star6">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail"><span class="date float-right">23 Jun</span><span class="from">Language Course</span>
											<p class="msg">Learn new language, Hizrian !</p>
										</div>
									</div>
									<div class="email-list-item">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star5" value="1">
													<label for="star5">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail"><span class="date float-right">17 May</span><span class="from">Farrah Septya</span>
											<p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
										</div>
									</div>
									<div class="email-list-item">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star3" value="1">
													<label for="star3">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail"><span class="date float-right">16 May</span><span class="from">Facebook</span>
											<p class="msg">Somebody requested a new password</p>
										</div>
									</div>
									<div class="email-list-item">
										<div class="email-list-actions">
											<div class="d-flex">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input"><span class="custom-control-label"></span>
												</label>
												<span class="rating rating-sm mr-3">
													<input type="checkbox" id="star4" value="1">
													<label for="star4">
														<span class="fa fa-star"></span>
													</label>
												</span>
											</div>
										</div>
										<div class="email-list-detail"><span class="date float-right">12 May</span><span class="from">Kristopher Donny</span>
											<p class="msg">Hello Friend, How are you?</p>
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
								<a class="nav-link" href="http://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		<div class="quick-sidebar">
			<a href="#" class="close-quick-sidebar">
				<i class="flaticon-cross"></i>
			</a>
			<div class="quick-sidebar-wrapper">
				<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
					<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
				</ul>
				<div class="tab-content mt-3">
					<div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
						<div class="messages-contact">
							<div class="quick-wrapper">
								<div class="quick-scroll scrollbar-outer">
									<div class="quick-content contact-content">
										<span class="category-title mt-0">Contacts</span>
										<div class="avatar-group">
											<div class="avatar">
												<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">+</span>
											</div>
										</div>
										<span class="category-title">Recent</span>
										<div class="contact-list contact-list-recent">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Jimmy Denis</span>
														<span class="message">How are you ?</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Chad</span>
														<span class="message">Ok, Thanks !</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">John Doe</span>
														<span class="message">Ready for the meeting today with...</span>
													</div>
												</a>
											</div>
										</div>
										<span class="category-title">Other Contacts</span>
										<div class="contact-list">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Jimmy Denis</span>
														<span class="status">Online</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Chad</span>
														<span class="status">Active 2h ago</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-away">
														<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Talha</span>
														<span class="status">Away</span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="messages-wrapper">
							<div class="messages-title">
								<div class="user">
									<div class="avatar avatar-offline float-right ml-2">
										<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<span class="name">Chad</span>
									<span class="last-active">Active 2h ago</span>
								</div>
								<button class="return">
									<i class="flaticon-left-arrow-3"></i>
								</button>
							</div>
							<div class="messages-body messages-scroll scrollbar-outer">
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">Hello, Rian</div>
											</div>
											<div class="date">12.31</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													Hello, Chad
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													What's up?
												</div>
											</div>
											<div class="date">12.35</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Thanks
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													When is the deadline of the project we are working on ?
												</div>
											</div>
											<div class="date">13.00</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													The deadline is about 2 months away
												</div>
											</div>
											<div class="date">13.10</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Ok, Thanks !
												</div>
											</div>
											<div class="date">13.15</div>
										</div>
									</div>
								</div>
							</div>
							<div class="messages-form">
								<div class="messages-form-control">
									<input type="text" placeholder="Type here" class="form-control input-pill input-solid message-input">
								</div>
								<div class="messages-form-tool">
									<a href="#" class="attachment">
										<i class="flaticon-file"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tasks" role="tabpanel">
						<div class="quick-wrapper tasks-wrapper">
							<div class="tasks-scroll scrollbar-outer">
								<div class="tasks-content">
									<span class="category-title mt-0">Today</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Planning new project structure</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add new Post</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Finalise the design proposal</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<span class="category-title">Tomorrow</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Initialize the project							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Updates changes to GitHub							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span title="This task is too long to be displayed in a normal space!" class="custom-control-label">This task is too long to be displayed in a normal space!				</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<div class="mt-3">
										<div class="btn btn-primary btn-rounded btn-sm">
											<span class="btn-label">
												<i class="fa fa-plus"></i>
											</span>
											Add Task
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="settings" role="tabpanel">
						<div class="quick-wrapper settings-wrapper">
							<div class="quick-scroll scrollbar-outer">
								<div class="quick-content settings-content">

									<span class="category-title mt-0">General Settings</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Enable Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Signin with social media</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Backup storage</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">SMS Alert</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>

									<span class="category-title mt-0">Notifications</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Email Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Comments</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Chat Messages</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Project Updates</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Tasks</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Custom template | don't include it in your project! -->
		<!-- <div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="selected changeSideBarColor" data-color="blue"></button>
							<button type="button" class="changeSideBarColor" data-color="purple"></button>
							<button type="button" class="changeSideBarColor" data-color="light-blue"></button>
							<button type="button" class="changeSideBarColor" data-color="green"></button>
							<button type="button" class="changeSideBarColor" data-color="orange"></button>
							<button type="button" class="changeSideBarColor" data-color="red"></button>
							<br/>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
							<button type="button" class="changeSideBarColor" data-color="blue2"></button>
							<button type="button" class="changeSideBarColor" data-color="purple2"></button>
							<button type="button" class="changeSideBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeSideBarColor" data-color="green2"></button>
							<button type="button" class="changeSideBarColor" data-color="orange2"></button>
							<button type="button" class="changeSideBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div> -->
		<!-- End Custom template -->
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