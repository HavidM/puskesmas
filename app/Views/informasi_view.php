<div class="container pt-5">
<!-- <a href="<?= base_url('informasi/tambah');?>" class="btn btn-success mb-2">Tambah Informasi</a> -->
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Informasi Terkini</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <!-- <thead>
                        <tr>
                            <th>No</th>
                            <th>JUDUL</th>
                            <th>ISI</th>
                            <th>AKSI</th>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getInformasi as $isi){?>
                            <tr>
                                <!-- <td><?= $no;?></td>
                                <td><?= $isi['JUDUL'];?></td> -->
                                <td><?= $isi['ISI'];?></td>
                                <td>
                                    <a href="<?= base_url('informasi/edit/'.$isi['ID']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <!-- <a href="<?= base_url('informasi/hapus/'.$isi['ID']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus informasi ?')"
                                    class="btn btn-danger">
                                    Hapus</a> -->
                                    <!-- <a href="<?= base_url('antrian/batal/'.$isi['ID']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin membatalkan antrian ini ?')"
                                    class="btn btn-danger">
                                    Batal</a> -->
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
</div>