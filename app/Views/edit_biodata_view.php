<div class="container p-5">
    <a href="<?= base_url('biodata');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Pasien : <?= $biodata->NAMA;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('biodata/update');?>">
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" value="<?= $biodata->NIK;?>" name="nik" required class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" value="<?= $biodata->NAMA;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" value="<?= $biodata->PASSWORD;?>" name="password" required class="form-control">
                </div>
                <!-- <p>Pilih Jenis Kelamin :</p>
                <input type="radio" id="jeniskelamin1" name="jeniskelamin" value="<?= $biodata->JENIS_KELAMIN;?>" >
                <label for="jeniskelamin1">Laki-laki</label><br>
                <input type="radio" id="jeniskelamin2" name="jeniskelamin" value="<?= $biodata->JENIS_KELAMIN;?>">
                <label for="jeniskelamin2">Perempuan</label><br> -->
                <p>Pilih Jenis Kelamin : </p>
                <!-- <?= $biodata->JENIS_KELAMIN;?> -->
                <input type="radio" id="jeniskelamin" name="jeniskelamin" value="L">
                <label for="jeniskelamin1">Laki-laki</label><br>
                <input type="radio" id="jeniskelamin" name="jeniskelamin" value="P">
                <label for="jeniskelamin2">Perempuan</label><br>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $biodata->ALAMAT;?>" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" value="<?= $biodata->TANGGAL_LAHIR;?>" name="tanggal_lahir" required class="form-control">
                </div>
                <input type="hidden" value="<?= $biodata->ID;?>" name="id">
                <button class="btn btn-success">Edit Data Pasien</button>
            </form>
            
        </div>
    </div>
</div>