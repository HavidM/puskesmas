<div class="container p-5">
    <a href="<?= base_url('poli');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Poli <!--: <?= $poli->NAMA;?>--></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('poli/update');?>">
                <div class="form-group">
                    <label for="">Nama : </label><br>
                    <?= $poli->NAMA;?>
                </div>
                <div class="form-group">
                    <label for="">Menjadi Nama : </label>
                    <input type="text" value="<?= $biodata->NAMA;?>" name="nama" required class="form-control">
                </div>
                <input type="hidden" value="<?= $poli->ID;?>" name="id">
                <button class="btn btn-success">Edit Poli</button>
            </form>
            
        </div>
    </div>
</div>