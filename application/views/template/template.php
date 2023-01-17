<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>CapiClean - StayClean</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>csss/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/')?>csss/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?=base_url('assets/')?>csss/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="<?=base_url('assets/')?>imagess/icon-1.png" type="image/gif/png">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/')?>csss/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- owl stylesheets -->
	<link rel="stylesheet" href="<?=base_url('assets/')?>csss/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/')?>csss/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
		media="screen">
</head>

<body>
	<!--header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"><a href="<?=base_url('Awal/')?>"><img
								src="<?=base_url('assets/')?>imagess/logo.png"></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="menu_text" style="float:right">
						<ul>
							<div class="togle_3">
								<div class="menu_main">
									<div class="padding_left0"><a href="<?=base_url('Profil_user/')?>">BOOK NOW!</a>
										<span class="padding_left0"><a href="#"></a></span></div>
								</div>
								<!-- <div class="shoping_bag"><img src="<?=base_url('assets/')?>imagess/search-icon.png"></div> -->
							</div>
							<div id="myNav" class="overlay">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
								<div class="overlay-content float-right">
									<a href="#home">Home</a>
									<a href="#services">Services</a>
									<a href="#about">About</a>
									<!-- <a href="#choose">Choose</a> -->
									<a href="#team">Team</a>
									<a href="#contactus">Contact Us</a>
									<a href="<?=base_url('Auth/logout')?>">Logout</a>
								</div>
							</div>
							<span class="navbar-toggler-icon"></span>
							<span onclick="openNav()"><img src="<?=base_url('assets/')?>imagess/toggle-icon.png"
									class="toggle_menu"></span>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- banner section start -->
		<div class="banner_section layout_padding" id="home">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<h1 class="banner_taital">Best YOUR</h1>
						<h1 class="banner_taital_1">house CLEAN</h1>
						<p class="banner_text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
							Ut enim</p>
						<div class="contact_bt"><a href="<?=base_url('Book/book')?>">BOOK NOW<span class="contact_padding"><img
										src="<?=base_url('assets/')?>imagess/contact-icon.png"></span></a></div>
					</div>
					<div class="col-sm-2">
						<div class="play_icon"><a href="#"><img src="<?=base_url('assets/')?>imagess/play-icon.png"></a>
						</div>
					</div>
					<div class="col-sm-5">
						<div><img src="<?=base_url('assets/')?>imagess/img-1.png" class="image_1"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner section end -->
	</div>
	<!-- header section end -->
	<!-- services section start -->
	<div class="services_section layout_padding" id="services">
		<div class="container">
			<h1 class="services_taital"><span>Our</span> <img src="<?=base_url('assets/')?>imagess/icon-1.png"> <span
					style="color: #1f1f1f">Services</span></h1>
			<p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua</p>
			<div id="main_slider" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="services_section_2 layout_padding">
							<div class="row">
								<div class="col-md-6">
									<div class="box_section active">
										<div class="tiles_img"></div>
										<h3 class="tile_text active">Tile & Grout</h3>
										<p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat.
											Duis aute irure dolor </p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box_section">
										<div class="tiles_img_1"></div>
										<h3 class="tile_text">Carpet Cleaning</h3>
										<p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis
											aute irure dolor</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="services_section_2 layout_padding">
							<div class="row">
								<div class="col-md-6">
									<div class="box_section active">
										<div class="tiles_img"></div>
										<h3 class="tile_text active">Tile & Grout</h3>
										<p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat.
											Duis aute irure dolor </p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box_section">
										<div class="tiles_img_1"></div>
										<h3 class="tile_text">Carpet Cleaning</h3>
										<p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis
											aute irure dolor</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="services_section_2 layout_padding">
							<div class="row">
								<div class="col-md-6">
									<div class="box_section active">
										<div class="tiles_img"></div>
										<h3 class="tile_text active">Tile & Grout</h3>
										<p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea
											commodo consequat.
											Duis aute irure dolor </p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box_section">
										<div class="tiles_img_1"></div>
										<h3 class="tile_text">Carpet Cleaning</h3>
										<p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis
											aute irure dolor</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- services section start -->
	<!-- about section start -->
	<div class="about_section layout_padding"  id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div><img src="<?=base_url('assets/')?>imagess/img-2.png" class="image_2"></div>
				</div>
				<div class="col-md-6">
					<h1 class="services_taital"><span>About</span> <img
							src="<?=base_url('assets/')?>imagess/icon-1.png"> <span
							style="color: #1f1f1f">Cleaning</span></h1>
					<p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet,
						consectetur
						adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						minim veniam,
					</p>
					<div class="contact_bt_1"><a href="#" data-toggle="modal" data-target="#exampleModal">READ MORE<span class="contact_padding"><img
									src="<?=base_url('assets/')?>imagess/contact-icon1.png"></span></a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- about section end -->
	<!-- choose section start -->
	<div class="choose_section layout_padding"  id="choose">
		<div class="container">
			<h1 class="choose_taital"><span>Why </span> <img src="<?=base_url('assets/')?>imagess/icon-1.png"> <span
					style="color: #1f1f1f">Choose Us</span></h1>
			<p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua</p>
			<div class="choose_section_2 layout_padding">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="choose_box">
							<h1 class="client_taital">12004+</h1>
							<h4 class="client_text">Our clients</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="choose_box">
							<h1 class="client_taital">10004+</h1>
							<h4 class="client_text">Happy clients</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="choose_box">
							<h1 class="client_taital">804+</h1>
							<h4 class="client_text">Supports</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="choose_box">
							<h1 class="client_taital">905+</h1>
							<h4 class="client_text">Awards</h4>
						</div>
					</div>
				</div>
				<div class="image_3"><img src="<?=base_url('assets/')?>imagess/img-3.png"></div>
				<div class="get_bt"><a href="#">Get A quote</a></div>
			</div>
		</div>
	</div>
	<!-- choose section end -->

	<!-- team section start -->
	<div class="team_section layout_padding" id="team">
		<div class="container">
			<h1 class="choose_taital"><span>Our </span> <img src="<?=base_url('assets/')?>imagess/icon-1.png"> <span
					style="color: #1f1f1f">CapiClean</span></h1>
			<p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua</p>
			<div class="team_section_2 layout_padding">
				<div class="container">
					<div class="images_main_1">
						<div class="row">
							<div class="col-sm-5">
								<div class="image_4"><img src="<?=base_url('assets/')?>imagess/img-4.png"></div>
								<h6 class="follow_text">Follow Us</h6>
								<div class="follow_social_icon">
									<ul>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/fb-icon.png"></a></li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/twitter-icon.png"></a>
										</li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/linkden-icon.png"></a>
										</li>
										<li><a href="#"><img
													src="<?=base_url('assets/')?>imagess/instagram-icon.png"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-7">
								<h2 class="consectetur_text">Tentang CapiClean</h2>
								<p class="dummy_text">CapiClean adalah sebuah perusahaan yang bergerak dalam bidang jasa
									kebersihan lingkungan rumah, yang mana sangat efisien bagi orang-orang yang sangat
									sibuk dengan pekerjaannya sehingga lupa membersihkan lingkungan rumah.</p>
							</div>
						</div>
					</div>
					<div class="images_main">
						<div class="row">
							<div class="col-sm-7">
								<h2 class="consectetur_text_1">Pengalaman Pekerja</h2>
								<p class="dummy_text_1">Pekerja yang telah bergabung dengan CapiClean, adalah pekerja
									yang terpilih dan berpengalaman yang sangat baik tentang jasa kebersihan.</p>
							</div>
							<div class="col-sm-5">
								<div class="image_4"><img src="<?=base_url('assets/')?>imagess/img-5.png"></div>
								<h6 class="follow_text">Follow Us</h6>
								<div class="follow_social_icon">
									<ul>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/fb-icon.png"></a></li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/twitter-icon.png"></a>
										</li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/linkden-icon.png"></a>
										</li>
										<li><a href="#"><img
													src="<?=base_url('assets/')?>imagess/instagram-icon.png"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="images_main_1">
						<div class="row">
							<div class="col-sm-5">
								<div class="image_4"><img src="<?=base_url('assets/')?>imagess/img-6.png"></div>
								<h6 class="follow_text">Follow Us</h6>
								<div class="follow_social_icon">
									<ul>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/fb-icon.png"></a></li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/twitter-icon.png"></a>
										</li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/linkden-icon.png"></a>
										</li>
										<li><a href="#"><img
													src="<?=base_url('assets/')?>imagess/instagram-icon.png"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-7">
								<h2 class="consectetur_text">Attitude</h2>
								<p class="dummy_text">Kami selalu melakukan pelatihan kepada para pekerja tentang
									attitude yang baik dan benar, sehingga customer tidak perlu cemas ketika menggunakan
									jasa CapiClean</p>
							</div>
						</div>
					</div>
					<div class="images_main">
						<div class="row">
							<div class="col-sm-7">
								<h2 class="consectetur_text_1">Professionalitas</h2>
								<p class="dummy_text_1">Para pekerja yang telah bergabung dengan CapiClean, telah lolos
									seleksi dan telah mengikuti pelatihan tentang jasa kebersihan</p>
							</div>
							<div class="col-sm-5">
								<div class="image_4"><img src="<?=base_url('assets/')?>imagess/img-7.png"></div>
								<h6 class="follow_text">Follow Us</h6>
								<div class="follow_social_icon">
									<ul>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/fb-icon.png"></a></li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/twitter-icon.png"></a>
										</li>
										<li><a href="#"><img src="<?=base_url('assets/')?>imagess/linkden-icon.png"></a>
										</li>
										<li><a href="#"><img
													src="<?=base_url('assets/')?>imagess/instagram-icon.png"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">About Cleaning</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, asperiores quasi! Non molestiae minima accusantium inventore, nulla id? Error molestiae dolores similique sapiente, deleniti cum corrupti nobis assumenda animi corporis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
		<!-- footer section start -->
		<div class="footer_section layout_padding"  id="contactus">
		<div class="container">
			<div class="footer_main">
				<div class="footer_left">
					<h1 class="contact_taital"><span>Contact</span> <img
							src="<?=base_url('assets/')?>imagess/icon-2.png">
						<span>Us</span></h1>
				</div>
				<div class="footer_left">
					<div class="location_text"><a href="#"><img
								src="<?=base_url('assets/')?>imagess/call-icon.png"><span class="padding_left_15">+62
								85210502002</span></a></div>
				</div>
				<div class="footer_left">
					<div class="location_text"><a href="#"><img src="<?=base_url('assets/')?>imagess/map-icon.png"><span
								class="padding_left_15">capiclean@gmail.com</span></a></div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer section end -->

	<!-- team section start -->
	<!-- newsletter section start -->
	<!-- <div class="newsletter_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="newsletter_text">Newsletter</h1>
            <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p>
          </div>
          <div class="col-md-6">
            <div class="mail_bt_main">
              <input type="text" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
              <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
	<!-- newsletter section end -->

	<!-- copyright section start -->
	<div class="copyright_section">
		<div class="container">
			<p class="copyright_text">Copyright 2022 All Right Reserved By <a href="https://html.design">CapiClean</a>
			</p>
		</div>
	</div>
	<!-- copyright section end -->

	<!-- Javascript files-->
	<script src="<?=base_url('assets/')?>jss/jquery.min.js"></script>
	<script src="<?=base_url('assets/')?>jss/popper.min.js"></script>
	<script src="<?=base_url('assets/')?>jss/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url('assets/')?>jss/jquery-3.0.0.min.js"></script>
	<script src="<?=base_url('assets/')?>jss/plugin.js"></script>
	<!-- sidebar -->
	<script src="<?=base_url('assets/')?>jss/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?=base_url('assets/')?>jss/custom.js"></script>
	<!-- javascript -->
	<script src="<?=base_url('assets/')?>jss/owl.carousel.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').trigger('focus')
		})
		$(document).ready(function () {
			$(".fancybox").fancybox({
				openEffect: "none",
				closeEffect: "none"
			});

			$(".zoom").hover(function () {

				$(this).addClass('transition');
			}, function () {

				$(this).removeClass('transition');
			});
		});

	</script>
	<script>
		function openNav() {
			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}

	</script>
</body>

</html>
