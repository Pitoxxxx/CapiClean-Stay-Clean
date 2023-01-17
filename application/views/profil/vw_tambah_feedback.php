<div class="pcoded-inner-content">
                           
     <div class="main-body">
       <div class="page-wrapper">
                                   
         <div class="page-body">
                                        
           <div class="card">
               <div class="card-header">
               <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
               <?= $this->session->flashdata('message');
        ?>
                <div class="form-control form-bg-primary">
                    Silahkan Isi Masukan di bawah ini
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="masukan">Masukan</label>
                            <input type="text" name="masukan" value="<?= set_value('masukan'); ?>" class="form-control" id="masukan" placeholder="Masukan">
                            <?= form_error('masukan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>    
                        <a href="<?= base_url('Profil') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="Tambah" class="btn btn-primary float-right">Kirim</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>