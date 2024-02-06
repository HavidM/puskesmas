<div class="container p-5">
    <a href="<?= base_url('aboutus');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit About Us</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('aboutus/update');?>">
                <!-- <div class="form-group">
                    <label for="">judul</label>
                    <textarea type ="text" rows="auto" cols="auto" value="<?= $aboutus->JUDUL;?>" name="judul" required class="form-control"></textarea>
                </div> -->
                <div class="form-group">
                    <label for="isi">ISI</label>
                    <!-- <textarea type="text" value="<?= $aboutus->ISI;?>" name="isi" required class="form-control"></textarea> -->
                    <input type="text" value="<?= $aboutus->ISI;?>" name="isi" required class="form-control">
                </div>
                       
                <input type="hidden" value="<?= $aboutus->ID;?>" name="id">
                <button class="btn btn-success">Edit About Us</button>
            </form>
            
        </div>
    </div>
</div>