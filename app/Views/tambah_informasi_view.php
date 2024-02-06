<div class="container p-5">
    <a href="<?= base_url('informasi');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Informasi</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('informasi/add');?>">
                <div class="form-group">
                    <label for="">JUDUL</label>
                    <input type="text" name="nama" class="form-control" required>
                    <label for="">ISI</label>
                    <input type="text" name="nama" class="form-control"required>
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
            
        </div>
    </div>
</div>