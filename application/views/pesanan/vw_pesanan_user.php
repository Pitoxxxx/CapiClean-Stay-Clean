<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-block table-border-style">
						<div class="table-responsive">
							<table class="table">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<?= $this->session->flashdata('message'); ?>
									<!-- <table class="table"> -->
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Customer</th>
											<th>Alamat</th>
											<th>No. HP Customer</th>
											<th>Nama Petugas</th>
											<th>Tanggal & jam kerja</th>
											<th>Paket</th>
											<th>Catatan</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($orderan as $us) : ?>

										<tr>
											<td> <?= $i; ?>.</td>
											<td> <?= $us['nama_customer']; ?></td>
											<td> <?= $us['alamat']; ?></td>
											<td> <?= $us['no_hp']; ?></td>
											<td> <?= $us['nama']; ?></td>
											<td> <?= $us['tanggal']; ?></td>
											<td> <?= $us['paket']; ?></td>
											<td> <?= $us['catatan']; ?></td>
											<td> <?= $us['status']; ?></td>
										</tr>
										<?php $i++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
						</div>
					</div>
				</div>
