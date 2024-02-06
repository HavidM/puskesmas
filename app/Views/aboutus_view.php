<div class="container pt-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">About Us</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <?php $no=1; foreach($getAboutus as $isi){?>
                            <tr>
                                <!-- <td><?= $isi['JUDUL'];?></td> -->
                                <td><?= $isi['ISI'];?></td>
                                <td>
                                    <a href="<?= base_url('aboutus/edit/'.$isi['ID']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
</div>