<section class="content-header">
    


    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Data Asisten </h3>
                <div class="pull-right">
                    <a href="<?= site_url('asisten') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-user-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); 
                        ?>
                       
                         <?php echo form_open_multipart('asisten/asisten_process') ?>
                            <div class="form-group">
                                <label>Stambuk *</label>
                                <input type="hidden" name="id" value="<?=$row->id_asisten?>">
                                <input type="text" name="stambuk" value="<?=$row->stambuk ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="text" name="nama" value="<?=$row->nama ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <input type="text" name="jk" value="<?=$row->jk ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Kontak *</label>
                                <input type="text" name="hp" value="<?=$row->hp ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <?php if($page == 'edit'){ 
                                    if($row->foto != null) { ?>
                                    <div style="margin-bottom:5px">
                                        <img src="<?=base_url('upload/asisten/'.$row->foto)?>" style="width: 80%">
                                    </div>
                                <?php }
                                } ?>
                                <input type="file" name="foto"  class="form-control">
                                <small>(Biarkan kosong bila tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)</small>
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea name="alamat" value="<?=$row->alamat ?>" class="form-control" ><?=$row->alamat ?> </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit"  name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i> Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                            </div>

                       <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

    </section>