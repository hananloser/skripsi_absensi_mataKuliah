<section class="content-header">


    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Jadwal </h3>
                <div class="pull-right">
                    <a href="<?= site_url('jadwal') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-user-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); 
                        ?>
                        <form action="<?=site_url('jadwal/jadwal_process') ?>" method="post">
                          <div class="form-group">
                                <label>Tanggal *</label>
                                <input type="hidden" name="id" value="<?=$row->id_jadwal?>">
                                <input type="date" name="tanggal" value="<?=$row->tanggal ?>" class="form-control" required>
                            </div> 
                            
                            <div class="form-group">
                                <label>Jam Mulai *</label>
                                <input type="time" name="mulai" value="<?=$row->mulai ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jam Selesai *</label>
                                <input type="time" name="selesai" value="<?=$row->selesai ?>" class="form-control" required>
                            </div> 
                            <div class="form-group">
                                <label>Frekuensi Kelas *</label>
                                <select name="frek" class="form-control">
                                    <option value=""> Pilih </option>
                                    <?php 
                                        foreach($frek->result() as $key => $data){ ?>
                                        <option value="<?=$data->id_frek?>" <?=$data->id_frek == $row->id_frek ? "selected" : null?>><?=$data->frek?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Asisten *</label>
                                <select name="asisten" class="form-control">
                                    <option value=""> Pilih </option>
                                    <?php 
                                        foreach($asisten->result() as $key => $data){ ?>
                                        <option value="<?=$data->id_asisten?>"<?=$data->id_asisten == $row->id_asisten ? "selected" : null?>><?=$data->nama?></option>
                                    <?php } ?>
                                </select>
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