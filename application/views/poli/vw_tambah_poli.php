<div class="pcoded-inner-content">
                           
     <div class="main-body">
       <div class="page-wrapper">
                                   
         <div class="page-body">
                                        
           <div class="card">
               <div class="card-header">
               <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="form-control form-bg-primary">
                    Form Tambah Data Poli
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_poli">Nama Poli</label>
                            <input type="text" name="nama_poli" value="<?= set_value('nama_poli'); ?>" class="form-control" id="nama_dokter" placeholder="Nama Poli">
                            <?= form_error('nama_poli', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= set_value('ruangan'); ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>    

                        <a href="<?= base_url('Poli') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="Tambah" class="btn btn-primary float-right">Tambah Poli</button>
    

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>