<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

						<div class="col-md-100"><a href="<?= base_url(); ?>Karyawan/tambah"
								class="btn btn-primary btn-round waves-effect waves-light">Tambah Karyawan</a></div>
					</div>
					<div class="card-block table-border-style">
						<div class="table-responsive">
							<table class="table">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<?= $this->session->flashdata('message'); ?>
									<!-- <table class="table"> -->

									<thead>
										<tr>
											<th>No</th>
											<th>Gambar</th>
											<th>Nama</th>
											<th>Tempat, Tanggal Lahir</th>
											<th>Jenis Kelamin</th>
											<th>Alamat</th>
											<th>No HP</th>
											<th>Jam Kerja</th>
											<th>Hari Kerja</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($karyawan as $us) : ?>

										<tr>
											<td> <?= $i; ?>.</td>
											<td><img src="<?= base_url('assets/images/karyawan/') . $us['gambar']; ?>"
													styLe="width:100px" class="img-thumbnail"></td>
											<td> <?= $us['nama']; ?></td>
											<td> <?= $us['ttl']; ?></td>
											<td> <?= $us['jenis_kelamin']; ?></td>
											<td> <?= $us['alamat']; ?></td>
											<td> <?= $us['no_hp']; ?></td>
											<td> <?= $us['jam_kerja']; ?></td>
											<td> <?= $us['hari']; ?></td>
											<td>
												<a href="<?= base_url('Karyawan/hapus/') . $us['id']; ?>"
													class="label.lg badge badge-danger">Hapus</a>
												<a href="<?= base_url('Karyawan/edit/') . $us['id']; ?>"
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
