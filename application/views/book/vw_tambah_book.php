<br>
<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<div class="form-control form-bg-primary">
							Form Tambah Pesanan CapiClean
						</div>
						<div class="card-body">
							<form action="" method="POST">
								<div class="form-group">
									<label for="nama_customer">Nama Customer</label>
									<input type="text" name="nama_customer" value="<?= $user['nama']; ?>"
										class="form-control" id="nama_customer" placeholder="Nama Customer">
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?= $user['alamat']; ?>"
										class="form-control" id="alamat" placeholder="Alamat Customer">
								</div>

								<div class="form-group">
									<label for="no_hp">No Hp</label>
									<input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>"
										class="form-control" id="no_hp" placeholder="No Hp Customer">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="nama">Pilih Petugas</label>
									<select name="nama" value="<?= set_value('nama'); ?>"
										class="form-control" id="nama">
										<?php foreach($karyawan as $us){?>
										<option value="<?=$us['id']?>"><?php echo $us['nama'];?></option>
										<?php } ?>
									</select>
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="tanggal">Tanggal & jam Kerja</label>
									<input type="datetime-local" name="tanggal" value="<?= set_value('tanggal'); ?>"
										class="form-control" id="tanggal" placeholder="Tanggal & jam kerja">
									<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="paket">Pilih Paket</label>
									<select name="paket" value="<?= set_value('paket'); ?>" class="form-control"
										id="paket" placeholder="Pilih Paket">
										<option value="">Pilih Paket</option>
										<option value="Paket A : Bersih Rumah Full">Paket A : Bersih Rumah Full</option>
										<option value="Paket B : Bersih Toilet">Paket B : Bersih Toilet</option>
										<option value="Paket C : Bersih Halaman Rumah">Paket C : Bersih Halaman Rumah
										</option>
										<option value="Paket D : Bersih Ruangan Rumah">Paket D : Bersih Ruangan Rumah
										</option>
									</select>
									<?= form_error('paket', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="catatan">Tambahkan Catatan (opsional)</label>
									<textarea rows="5" cols="5" name="catatan" value="<?= set_value('catatan'); ?>"
										class="form-control" id="catatan" placeholder="Tambahkan Catatan (opsional)"></textarea>
									<?= form_error('catatan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<a href="<?= base_url('Pesanan/') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah
									Pesanan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
