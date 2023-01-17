<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
						<div class="form-control form-bg-primary">
							Form Edit Data Karyawan
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?=$karyawan['id']; ?>">
								<div class="form-group">
									<label for="nama">Nama Karyawan</label>
									<input type="text" name="nama" value="<?= $karyawan['nama']; ?>"
										class="form-control" id="nama" placeholder="Nama Karyawan">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="ttl">Tempat, Tanggal Lahir</label>
									<input type="text" name="ttl" value="<?= $karyawan['ttl']; ?>" class="form-control"
										id="ttl" placeholder="Tempat, Tanggal Lahir">
									<?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
										<option value="Laki-laki" <?php if ($karyawan['jenis_kelamin'] == "Laki-laki") {
                                    echo "selected";
                                } ?>>Laki-laki</option>
										<option value="Perempuan" <?php if ($karyawan['jenis_kelamin'] == "Perempuan") {
                                    echo "selected";
                                } ?>>Perempuan</option>
									</select>
									<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?= $karyawan['alamat']; ?>"
										class="form-control" id="alamat" placeholder="alamat">
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="no_hp">No HP</label>
									<input type="text" name="no_hp" value="<?= $karyawan['no_hp']; ?>"
										class="form-control" id="no_hp" placeholder="Nomor HP">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="jam_kerja">Jam Kerja</label>
									<select name="jam_kerja" class="form-control" id="jam_kerja"
										placeholder="Pilih Jam Kerja">
										<option value="">Pilih Jam Kerja</option>
										<option value="08.00 - 10.00" <?php if ($karyawan['jam_kerja'] == "08.00 - 10.00") {
                                    echo "selected";
                                } ?>>08.00 - 10.00</option>
										<option value="09.00 - 11.00" <?php if ($karyawan['jam_kerja'] == "09.00 - 11.00") {
                                    echo "selected";
                                } ?>>09.00 - 11.00</option>
										<option value="10.00 - 12.00" <?php if ($karyawan['jam_kerja'] == "10.00 - 12.00") {
                                    echo "selected";
                                } ?>>10.00 - 12.00</option>
										<option value="13.00 - 15.00" <?php if ($karyawan['jam_kerja'] == "13.00 - 15.00") {
                                    echo "selected";
                                } ?>>13.00 - 15.00</option>
										<option value="14.00 - 16.00" <?php if ($karyawan['jam_kerja'] == "14.00 - 16.00") {
                                    echo "selected";
                                } ?>>14.00 - 16.00</option>
										<option value="15.00 - 17.00" <?php if ($karyawan['jam_kerja'] == "15.00 - 17.00") {
                                    echo "selected";
                                } ?>>15.00 - 17.00</option>
										<option value="16.00 - 18.00" <?php if ($karyawan['jam_kerja'] == "16.00 - 18.00") {
                                    echo "selected";
                                } ?>>16.00 - 18.00</option>
										<option value="19.00 - 21.00" <?php if ($karyawan['jam_kerja'] == "19.00 - 21.00") {
                                    echo "selected";
                                } ?>>19.00 - 21.00</option>
									</select>
									<?= form_error('jam_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="hari">Hari Kerja</label>
									<select name="hari" class="form-control" id="hari" placeholder="Pilih Hari Kerja">
										<option value="Senin - Rabu" <?php if ($karyawan['jam_kerja'] == "Senin - Rabu") {
                                    echo "selected";
                                } ?>>Senin - Rabu</option>
										<option value="Selasa - Kamis" <?php if ($karyawan['jam_kerja'] == "Selasa - Kamis") {
                                    echo "selected";
                                } ?>>Selasa - Kamis</option>
										<option value="Rabu - Jumat" <?php if ($karyawan['jam_kerja'] == "Rabu - Jumat") {
                                    echo "selected";
                                } ?>>Rabu - Jumat</option>
									</select>
									<?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<label for="gambar">Gambar</label>
								<div class="form-group">
									<div class="col-sm-100">
										<input type="file" name="gambar" id="gambar" class="form-control">
									</div>
								</div>

								<a href="<?= base_url('Karyawan') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="Tambah" class="btn btn-primary float-right">Edit
									Karyawan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
