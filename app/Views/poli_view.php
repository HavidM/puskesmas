<div class="container pt-5">
    <a href="<?= base_url('poli/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <a href="<?= base_url('poli/export/');?>" class="btn btn-success mb-2">Export to Excel</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Daftar Poli</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Poli</th>
                            <th>AKSI</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getPoli as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['NAMA'];?></td>
                                <td>
                                    <a href="<?= base_url('poli/edit/'.$isi['ID']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('poli/hapus/'.$isi['ID']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus daftar poli ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
                <?= $pager->Links('getPoli', 'bootstrap_pagination') ?>
            </div>
        </div>
    </div>
</div>