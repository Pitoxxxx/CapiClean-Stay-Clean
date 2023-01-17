<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
						<div class="form-control form-bg-primary">
							Form Edit Data Customer
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?=$customer['id']; ?>">
								<div class="form-group">
									<label for="nama_customer">Nama Customer</label>
									<input type="text" name="nama_customer" value="<?= $customer['nama_customer']; ?>"
										class="form-control" id="nama_customer" placeholder="Nama Customer">
									<?= form_error('nama_customer', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
										<option value="Laki-laki" <?php if ($customer['jenis_kelamin'] == "Laki-laki") {
                                    echo "selected";
                                } ?>>Laki-laki</option>
										<option value="Perempuan" <?php if ($customer['jenis_kelamin'] == "Perempuan") {
                                    echo "selected";
                                } ?>>Perempuan</option>
									</select>
									<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="no_hp">No HP</label>
									<input type="text" name="no_hp" value="<?= $customer['no_hp']; ?>"
										class="form-control" id="no_hp" placeholder="Nomor HP">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?= $customer['alamat']; ?>"
										class="form-control" id="alamat" placeholder="Alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<a href="<?= base_url('Customer') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="Tambah" class="btn btn-primary float-right">Edit
									Customer</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
