<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

						<div class="card-block table-border-style">
							<div class="table-responsive">
								<table class="table">
									<!-- <table class="table"> -->
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Gambar</th>
												<th>Nama</th>
												<th>NIP</th>
												<th>Jenis Kelamin</th>
												<th>Nama Poli</th>
												<th>Hari</th>
												<th>Jam</th>
												<th>No HP</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($dokter as $us) : ?>
											<tr>
												<td> <?= $i; ?>.</td>
												<td><img src="<?= base_url('assets/images/dokter/') . $us['gambar']; ?>"
														styLe="width:100px" class="img-thumbnail"></td>
												<td> <?= $us['nama_dokter']; ?></td>
												<td> <?= $us['nip']; ?></td>
												<td> <?= $us['jenis_kelamin']; ?></td>
												<td> <?= $us['nama_poli']; ?></td>
												<td> <?= $us['hari']; ?></td>
												<td> <?= $us['jam']; ?></td>
												<td> <?= $us['no_hp']; ?></td>
											</tr>
											<?php $i++; ?>
											<?php endforeach; ?>

										</tbody>
									</table>
							</div>
						</div>
					</div>
