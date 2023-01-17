<br>
<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="card">
					<div class="card-header">
						<div class="form-control form-bg-primary">
							Form Edit Pesanan CapiClean
						</div>
						<div class="card-body">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nama_customer">Nama Customer</label>
									<input type="text" name="nama_customer" value="<?=$orderan['nama_customer']; ?>"
										class="form-control" id="nama_customer" placeholder="Nama Customer">
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" value="<?=$orderan['alamat']; ?>"
										class="form-control" id="alamat" placeholder="Alamat Customer">
								</div>

								<div class="form-group">
									<label for="no_hp">No Hp</label>
									<input type="text" name="no_hp" value="<?=$orderan ['no_hp']; ?>"
										class="form-control" id="no_hp" placeholder="No Hp Customer">
									<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="nama">Pilih Petugas</label>
									<select name="nama" value="<?=$orderan ['nama']; ?>" class="form-control" id="nama">
										<option value="">Pilih Petugas</option>
										<?php foreach($karyawan as $us):?>
										<option value="<?=$us['id'];?>" <?php if ($orderan['nama']==$us['id'])  {
                                    echo "selected";
										}?>><?=$us['nama'];?></option>
										<?php endforeach;?>
									</select>
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="tanggal">Tanggal & jam Kerja</label>
									<input type="datetime-local" name="tanggal" value="<?= $orderan['tanggal']; ?>"
										class="form-control" id="tanggal" placeholder="Tanggal & jam kerja">
									<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="paket">Pilih Paket</label>
									<select name="paket" value="<?=$orderan ['paket']; ?>" class="form-control"
										id="paket" placeholder="Pilih Paket">
										<option value="Paket A : Bersih Rumah Full"
											<?php if($orderan['paket']=="Paket A : Bersih Rumah Full"){echo "selected";}?>>
											Paket A : Bersih Rumah Full</option>
										<option value="Paket B : Bersih Toilet"
											<?php if($orderan['paket']=="Paket B : Bersih Toilet"){echo "selected";}?>>
											Paket B : Bersih Toilet</option>
										<option value="Paket C : Bersih Halaman Rumah"
											<?php if($orderan['paket']=="Paket C : Bersih Halaman Rumah"){echo "selected";}?>>
											Paket C : Bersih Halaman Rumah</option>
										<option value="Paket D : Bersih Ruangan Rumah"
											<?php if($orderan['paket']=="Paket D : Bersih Ruangan Rumah"){echo "selected";}?>>
											Paket D : Bersih Ruangan Rumah</option>
									</select>
									<?= form_error('paket', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="catatan">Tambahkan Catatan (opsional)</label>
									<textarea rows="5" cols="5" name="catatan" value="<?=$orderan ['catatan']; ?>"
										class="form-control" id="catatan"
										placeholder="Tambahkan Catatan (opsional)"></textarea>
									<?= form_error('catatan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="form-group">
									<label for="status">Status Pesanan</label>
									<select name="status" id="status" class="form-control">
										<option value="Sedang Diproses" <?php if ($orderan['status'] == "Sedang Diproses") {
                                    echo "selected";
                                } ?>>Sedang Diproses</option>
										<option value="Sedang Dikerjakan" <?php if ($orderan['status'] == "Sedang Dikerjakan") {
                                    echo "selected";
                                } ?>>Sedang Dikerjakan</option>
										<option value="Selesai Dikerjakan" <?php if ($orderan['status'] == "Selesai Dikerjakan") {
                                    echo "selected";
                                } ?>>Selesai Dikerjakan</option>
									</select>
									<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<a href="<?= base_url('Pesanan/') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="Tambah" class="btn btn-primary float-right">Edit
									Pesanan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
