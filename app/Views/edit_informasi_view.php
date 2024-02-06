<div class="container p-5">
    <a href="<?= base_url('informasi');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Informasi Terkini</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('informasi/update');?>">
                <!-- <div class="form-group">
                    <label for="">judul</label>
                    <textarea type ="text" rows="auto" cols="auto" value="<?= $informasi->JUDUL;?>" name="judul" required class="form-control"></textarea>
                    <input type="text" value="<?= $informasi->JUDUL;?>" name="judul" required class="form-control">
                </div> -->
                <div class="form-group">
                    <label for="isi">ISI</label>
                    <!-- <textarea type ="text" value="<?= $informasi->ISI;?>" name="isi" required class="form-control"></textarea> -->
                    <input type="text" value="<?= $informasi->ISI;?>" name="isi" required class="form-control">
                </div>       
                <input type="hidden" value="<?= $informasi->ID;?>" name="id">
                <button class="btn btn-success">Edit Informasi Terkini</button>
            </form>
            
        </div>
    </div>
</div>