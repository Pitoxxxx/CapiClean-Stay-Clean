<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

						<div class="col-md-100"><a href="<?= base_url(); ?>Customer/tambah"
								class="btn btn-primary btn-round waves-effect waves-light">Tambah Customer</a></div>
					</div>
					<div class="card-block table-border-style">
						<div class="table-responsive">
							<table class="table">
								<?= $this->session->flashdata('message');?>
								<!-- <table class="table"> -->
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Jenis Kelamin</th>
											<th>No HP</th>
											<th>Alamat</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($customer as $us) : ?>

										<tr>
											<td> <?= $i; ?>.</td>
											<td> <?= $us['nama_customer']; ?></td>
											<td> <?= $us['jenis_kelamin']; ?></td>
											<td> <?= $us['no_hp']; ?></td>
											<td> <?= $us['alamat']; ?></td>
											<td>
												<a href="<?= base_url('Customer/hapus/') . $us['id']; ?>"
													class="label.lg badge badge-danger">Hapus</a>
												<a href="<?= base_url('Customer/edit/') . $us['id']; ?>"
													class="badge badge-warning">Edit</a>
											</td>
										</tr>
										<?php $i++; ?>
										<?php endforeach; ?>

									</tbody>
								</table>
						</div>
					</div>
				</div>
