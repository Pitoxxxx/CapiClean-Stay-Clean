<div class="pcoded-inner-content">

	<div class="main-body">

		<div class="page-wrapper">
			<div class="page-body">
			<?=$this->session->flashdata('message');?>
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
						<div class="card mb-3" style="max-width: 540px;">
							<div class="row no-gutters">
								<div class="col-md-4">
									<img src="<?= base_url('assets/images/') . $user['gambar'] ?>" class="card-img">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title"><?= $user['nama'] ?></h5>
										<p class="card-text"><?= $user['email'] ?></p>
										<p class="card-text"><small class="text-muted">Menjadi Admin Sejak<p
													class="card-text"><?= date('d F Y', $user['date_created']); ?></p>
												</small></p>
									</div>
								</div>
							</div>
						</div>
					</div>
