<div class="container p-5">
    <a href="<?= base_url('biodata');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Daftar Pasien</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('biodata/add');?>">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" required>
                </div>
                <p>Pilih Jenis Kelamin :</p>
                <input type="radio" id="jeniskelamin" name="jeniskelamin" value="L">
                <label for="jeniskelamin1">Laki-laki</label><br>
                <input type="radio" id="jeniskelamin" name="jeniskelamin" value="P">
                <label for="jeniskelamin2">Perempuan</label><br>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
            
        </div>
    </div>
</div>