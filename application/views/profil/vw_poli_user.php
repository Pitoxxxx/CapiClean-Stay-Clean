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
            <?= $this->session->flashdata('message');
        ?>
<!-- <table class="table"> -->
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th>Ruangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($poli as $us) : ?>

                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td> <?= $us['nama_poli']; ?></td>
                        <td> <?= $us['ruangan']; ?></td>   
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
</div>