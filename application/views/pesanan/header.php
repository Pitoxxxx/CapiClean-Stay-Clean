<!DOCTYPE html>
<html lang="en">

<head>
	<title>CapiClean - StayClean</title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description"
		content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
	<meta name="author" content="codedthemes" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url(); ?>assets/imagess/icon-1.png" type="icon-1.png">
	<!-- Google font-->
	<link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css"
		media="all">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
	<!-- waves.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css"
		media="all">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/themify-icons/themify-icons.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url(); ?>assets/icon/font-awesome/css/font-awesome.min.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/icon/icofont/css/icofont.css">
	<!-- morris chart -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/morris.js/css/morris.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css">
	<!-- Filter Table.css -->
	<link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
	<!-- Pre-loader start -->
	<!-- Pre-loader start -->
	<div class="theme-loader">
		<div class="loader-track">
			<div class="preloader-wrapper">
				<div class="spinner-layer spinner-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
				<div class="spinner-layer spinner-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-yellow">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>

				<div class="spinner-layer spinner-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="gap-patch">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<div class="mobile-search waves-effect waves-light">
							<div class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-addon search-close"><i class="ti-close"></i></span>
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
									</div>
								</div>
							</div>
						</div>
						<a href="<?=base_url('Awal/')?>">
							<img class="img-fluid" src="<?php echo base_url(); ?>assets/imagess/logo2.png"
								alt="Theme-Logo" />
						</a>
						<a class="mobile-options waves-effect waves-light">
							<i class="ti-more"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
								</div>
							</li>
							<li class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-addon search-close"><i class="ti-close"></i></span>
										<input type="text" class="form-control">
										<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
									</div>
								</div>
							</li>
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="header-notification">
								<a href="#!" class="waves-effect waves-light">
									<i class="ti-bell"></i>
									<span class="badge bg-c-red"></span>
								</a>
								<ul class="show-notification">
									<li>
										<h6>Notifications</h6>
									</li>
									<li class="waves-effect waves-light">
										<div class="media">
											<div class="media-body">
												<h5 class="notification-user">No Notifications!</h5>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="user-profile header-notification">
								<a href="#!" class="waves-effect waves-light">
									<img src="<?= base_url('assets/images/'), $user['gambar'] ?>" class="img-radius"
										alt="User-Profile-Image">
									<span><?= $user['nama']; ?></span></span>
									<i class="ti-angle-down"></i>
								</a>

								<?php if ($user['role'] == 'Admin') { ?>
								<ul class="show-notification profile-notification">
									<li class="waves-effect waves-light">
										<a href="<?= base_url('profil_admin') ?>">
											<i class="ti-user"></i> Profile
										</a>
									</li>
									<li class="waves-effect waves-light">
										<a href="<?= base_url('auth/logout'); ?>">
											<i class="ti-layout-sidebar-left"></i> Logout
										</a>
									</li>
									</u>
									<?php 
                                } else { ?>
									<ul class="show-notification profile-notification">
										<li class="waves-effect waves-light">
											<a href="<?= base_url('auth/logout'); ?>">
												<i class="ti-layout-sidebar-left"></i> Logout
											</a>
										</li>
									</ul>
									<?php } ?>
					</div>
				</div>
			</nav>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<nav class="pcoded-navbar">
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img class="img-8 img-radius"
										src="<?= base_url('assets/images/'), $user['gambar'] ?>"
										alt="User-Profile-Image">
									<div class="user-details">
										<span id="more-details "> <?= $user['nama']; ?></span>
									</div>
									<div class="main-menu-content">
										<ul>
										</ul>
									</div>
								</div>
								<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Menu</div>
								<ul class="pcoded-item pcoded-left-item">
								<li>
										<a href="<?= site_url('Book/tambah') ?>" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
											<span class="pcoded-mtext"
												data-i18n="nav.form-components.main">Form Book</span>
											&nbsp;
											&nbsp;
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Pesanan_admin/') ?>" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
											<span class="pcoded-mtext"
												data-i18n="nav.form-components.main">Pesanan</span>
											&nbsp;
											&nbsp;
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
									<li>
										<a href="<?= site_url('Profil_user/') ?>" class="waves-effect waves-dark">
											<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
											<span class="pcoded-mtext"
												data-i18n="nav.form-components.main">Profil</span>
											&nbsp;
											&nbsp;
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
					</nav>
					<div class="pcoded-content">
						<!-- Page-header start -->
						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-5">
										<div class="page-header-title">
											<h5 class="m-b-10">Selamat Datang, <?= $user['nama']; ?></h5>
											<p class="m-b-0">Pendataan CapiClean</p>
										</div>
									</div>
								</div>
							</div>
						</div>
