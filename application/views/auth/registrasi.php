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
					<form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">

						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/imagess/logo.png" alt="logo.png">
						</div>
						<div class="auth-box card">
							<div class="card-block">
								<div class="row m-b-20">
									<div class="col-md-12">
										<h3 class="text-center txt-primary">Sign up</h3>
									</div>
								</div>
								<div class="form-group form-primary">
									<input type="text" name="nama" value="<?= set_value('nama'); ?>"
										class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									<span class="form-bar"></span>
								</div>
								<div class="form-group">
									<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin')?>"
										id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
										<option value="">Jenis Kelamin</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
									<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group form-primary">
									<input type="text" name="alamat" value="<?= set_value('alamat'); ?>"
										class="form-control form-control-user" id="alamat" placeholder="Alamat Lengkap">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
									<span class="form-bar"></span>
								</div>
								<div class="form-group form-primary">
									<input type="text" value="<?= set_value('email'); ?>"
										class="form-control form-control-user" id="email" name="email"
										placeholder="Alamat Email">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									<span class="form-bar"></span>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group form-primary">
											<input type="password" class="form-control form-control-user" id="password1"
												name="password1" placeholder="Password">
											<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
											<span class="form-bar"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group form-primary">
											<input type="password" class="form-control form-control-user" id="password2"
												name="password2" placeholder="Ulangi Password">

											<span class="form-bar"></span>
										</div>
									</div>
								</div>

								<div class="row m-t-30">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Daftar Akun
										</button>
									</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-md-10">
										<p class="text-inverse text-left"><a href="<?= base_url(); ?>auth"><b>Sudah
													Punya akun? Silahkan Login!</b></a></p>
									</div>
									<div class="col-md-2">
										<img src="<?php echo base_url(); ?>assets/images/auth/Logo-small-bottom.png"
											alt="small-logo.png">
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
