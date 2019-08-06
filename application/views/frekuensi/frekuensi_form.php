<section class="content-header">


    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle">Tambah Frekuensi Kelas </h3>
               
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); 
                        ?>
                        <form action="<?=site_url('frekuensi/frekuensi_process') ?>" method="post">
                            
                            <div class="form-group">
                                <label>Jadwal *</label>
                                <input type="hidden" name="id" value="<?=$row->id_frekuensi?>">
                                <select name="jadwal" class="form-control">
                                    <option value=""> Pilih </option>
                                    <?php 
                                    
                                        foreach($jadwal->result() as $key => $data){ ?>
                                        <option value="<?=$data->id_jadwal?>"><?=$data->frek?>|| <?=$data->tanggal?>|| <?=$data->mulai?> || <?=$data->selesai?></option>
                                    <?php } ?>
                                </select>
                            </div>
                           
                            <div class="Checkbox">
                                <label>Praktikan *</label> <br>
                                <?php 
                                foreach($praktikan->result() as $key => $data){
                                 ?>
                                <input type="checkbox" name="praktikan[]" value="<?=$data->id_praktikan ?>" ><?=$data->nama?>
                                <?php } ?>
                            </div>
                                
                            <div class="form-group">
                                <button type="submit"  name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>