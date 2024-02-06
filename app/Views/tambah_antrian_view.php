<div class="container p-5">
    <a href="<?= base_url('antrian');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Antrian</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('antrian/add');?>">
                <div class="form-group">
                    <label for="nik">Daftar Nama :</label>
                    <div class="controls">
                        <select required name="niklist">
                            <option value="" disabled diselected>-- Pilih Nama Pasien --</option>
                        <?php                                
                        foreach ($dd_daftarpasien as $rownik) {  
                        echo "<option value='".$rownik['NAMA']."'>".$rownik['NAMA']."</option>";
                        }
                        echo"
                        </select>"
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Daftar Poli :</label>
                    <div class="controls">
                        <select required name="polilist">
                            <option value="" disabled diselected>-- Pilih Poli --</option>
                        <?php                                
                        foreach ($dd_poli as $row) {  
                        echo "<option value='".$row['NAMA']."'>".$row['NAMA']."</option>";
                        }
                        echo"
                        </select>"
                        ?>
                    </div>
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>