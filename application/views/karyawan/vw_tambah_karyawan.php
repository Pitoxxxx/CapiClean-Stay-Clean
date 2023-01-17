<div class="pcoded-inner-content">
                           
     <div class="main-body">
       <div class="page-wrapper">
                                   
         <div class="page-body">
                                        
           <div class="card">
               <div class="card-header">
               <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="form-control form-bg-primary">
                    Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Karyawan">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="ttl">Tempat, Tanggal Lahir</label>
                            <input type="text" name="ttl" value="<?= set_value('ttl'); ?>" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir">
                            <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= set_value('alamat'); ?>" class="form-control" id="alamat" placeholder="alamat">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control" id="no_hp" placeholder="Nomor HP">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="jam_kerja">Jam Kerja</label>
                            <select name="jam_kerja" value="<?= set_value('jam_kerja'); ?>" class="form-control" id="jam_kerja" placeholder="Pilih Jam Kerja">
                            <option value="">Pilih Jam Kerja</option>
                            <option value="08.00 - 10.00">08.00 - 10.00</option>
                            <option value="09.00 - 11.00">09.00 - 11.00</option>
                            <option value="10.00 - 12.00">10.00 - 12.00</option>
                            <option value="11.00 - 13.00">11.00 - 13.00</option>
                            <option value="13.00 - 15.00">13.00 - 15.00</option>
                            <option value="14.00 - 16.00">14.00 - 16.00</option>
                            <option value="15.00 - 17.00">15.00 - 17.00</option>
                            <option value="16.00 - 18.00">16.00 - 18.00</option>
                            <option value="19.00 - 21.00">19.00 - 21.00</option>
                            </select>
                            <?= form_error('jam_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="hari">Hari Kerja</label>
                            <select name="hari" value="<?= set_value('hari'); ?>" class="form-control" id="hari" placeholder="Pilih Hari Kerja">
                            <option value="">Pilih Hari Kerja</option>
                            <option value="Senin - Rabu">Senin - Rabu</option>
                            <option value="Selasa - Kamis">Selasa - Kamis</option>
                            <option value="Rabu - Jumat">Rabu - Jumat</option>
                            </select>
                            <?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                           <label for="Gambar">Gambar</label>
                           <div class="col-sm-100">
                          <input type="file" name="gambar" id="gambar" class="form-control">
                          </div>
                          </div>

                        <a href="<?= base_url('Karyawan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Karyawan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>