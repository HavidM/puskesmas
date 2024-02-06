<div class="container pt-5">
    <!-- <a href="<?= base_url('biodata/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <a href="<?= base_url('biodata/export/');?>" class="btn btn-success mb-2">Export to Excel</a> -->
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Daftar Pasien</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <!-- <th>AKSI</th> -->
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBiodata as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['NIK'];?></td>
                                <td><?= $isi['NAMA'];?></td>
                                <td><?= $isi['PASSWORD'];?></td>
                                <td><?= $isi['JENIS_KELAMIN'];?></td>
                                <td><?= $isi['ALAMAT'];?></td>
                                <td><?= $isi['TANGGAL_LAHIR'];?></td>
                                <!-- <td>
                                    <a href="<?= base_url('biodata/edit/'.$isi['ID']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('biodata/hapus/'.$isi['ID']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td> -->
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
                <?= $pager->Links('getBiodata', 'bootstrap_pagination') ?>
            </div>
        </div>
    </div>
</div>