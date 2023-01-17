<body themebg-pattern="theme1">
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
	<section class="login-block">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/imagess/logo.png" alt="logo.png">
						</div>
						<div class="auth-box card">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center txt-primary">LOGIN</h3>
									</div>
								</div>
								<?= $this->session->flashdata('message'); ?>
								<form class="user" method="POST" action="<?= base_url('auth'); ?>">
								<div class="form-group form-primary">
									<input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

									<span class="form-bar"></span>
								</div>
								<div class="form-group form-primary">
									<input type="password" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="password" name="password" placeholder=" Masukkan password">
									<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									<span class="form-bar"></span>
								</div>


								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-user btn-block">
											LOGIN
										</button>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-md-10">
									<p class="text-inverse text-left"><a href="auth/registrasi"><b>Buat Akun!</b></a></p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- end of col-sm-12 -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container-fluid -->
	</section>
