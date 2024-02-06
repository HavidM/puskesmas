<div class="container p-5">
    <a href="<?= base_url('DHistory');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Catatan Dokter</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('antrian/update2');?>">
                <div class="form-group">
                    <label for="">Nama Pasien : </label><br>
                    <?= $antrian->NAMA;?>
                    <!-- <input type="text" value="<?= $antrian->NAMA;?>" name="nama" required class="form-control">
                    <label for="">Nama Pasien <?= $antrian->NAMA;?></label>
                    <label for="">Nama Pasien</label>
                    <label for=""><?= $antrian->NAMA;?></label> -->
                </div>
                <div class="form-group">
                    <label for="">Poli : </label><br>
                    <?= $antrian->POLI;?>
                </div>
                <div class="form-group">
                    <label for="">Tanggal : </label><br>
                    <?= $antrian->TANGGAL;?>
                </div>
                <div class="form-group">
                    <label for="">Catatan Dokter</label>
                    <input type="text" value="<?= $antrian->CATDOK;?>" name="catdok" required class="form-control">
                </div>
                <input type="hidden" value="<?= $antrian->ID;?>" name="id">
                <button class="btn btn-success">Submit</button>
            </form>
            
        </div>
    </div>
</div>