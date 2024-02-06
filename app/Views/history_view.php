<!--<div class="container pt-5">
    <div class="col-6">
        <div class="form-group">
            <label for="startdate" class="font-weight-bold">Start :</label>
            <input type="date" id="startdate" name="startdate" class="form-control" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="finishdate" class="font-weight-bold">Finish :</label>
             <input type="date" id="finishdate" name="finishdate" class="form-control" required>
        </div>
    </div>-->

    <!--<a href="<?= base_url('antrian/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <a href="<?= base_url('antrian/export/');?>" class="btn btn-success mb-2">Export to Excel</a>-->
    <!-- <br><br>
        <div class="container align-items-center">
                <form action="<?= base_url('antrian/export/');?>" method="POST">
                    <div class="row">
                        <div class="col form-group">
                            <label class="font-weight-bold">From :</label>
                        </div> -->
                        <!-- <div class="col form-group"> -->
                            <!--<label for="inputMulaiTanggal" class="font-weight-bold">Mulai Tanggal :</label>-->
                            <!-- <input type="date" id="inputMulaiTanggal" name="mulai_tanggal" class="form-control" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">To :</label>
                        </div>
                        <div class="col form-group"> -->
                            <!--<label for="inputSampaiTanggal" class="font-weight-bold">Sampai Tanggal :</label>-->
                            <!-- <input type="date" id="inputSampaiTanggal" name="sampai_tanggal" class="form-control" required>
                        </div>
                        <div class="col form-group">
                            <button type="submit" class="col btn btn-success mt-2">Export</button>
                        </div> -->
                        <!-- <div class="col form-group">
                            <a href="<?= base_url('antrian/tambah');?>" class="btn btn-success mt-2">Tambah Data</a>
                        </div>
                    </div>
                </form>
            </div> -->

    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title" align="center">Data History Pasien</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NAMA</th>
                            <th>POLI</th>
                            <th>TANGGAL</th>
                            <th>CATATAN DOKTER</th>
                            <!-- <th>NO ANTRIAN</th>
                            <th>STATUS</th> -->
                            <!-- <th>AKSI</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getAntrian as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['NAMA'];?></td>
                                <td><?= $isi['POLI'];?></td>
                                <td><?= $isi['TANGGAL'];?></td>
                                <td><?= $isi['CATDOK'];?></td>
                                <!-- <td><?= $isi['NO_ANTRIAN'];?></td>
                                <td><?= $isi['STATUS'];?></td> -->
                                <!-- <td>
                                    <a href="<?= base_url('antrian/rekdis/'.$isi['ID']);?>" class="btn btn-success mt-2">Rekam Medis</a>
                                    <a href="<?= base_url('');?>"class="btn btn-success">Rekam Medis</a>
                                    <a href="<?= base_url('antrian/update/'.$isi['ID']);?>"
                                    class="btn btn-success">
                                    Finish</a>
                                    <a href="<?= base_url('antrian/batal/'.$isi['ID']);?>"
                                    onclick="javascript:return confirm('Apakah ingin membatalkan antrian ini ?')"
                                    class="btn btn-danger">
                                    Batal</a>
                                </td> -->
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
                <?= $pager->Links('getAntrian', 'bootstrap_pagination') ?>
            </div>
        </div>
    </div>
</div>
