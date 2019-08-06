<section class="content-header">


    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Frekuensi Kelas </h3>
                <div class="pull-right">
                    <a href="<?= site_url('frek') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-user-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); 
                        ?>
                        <form action="<?=site_url('frek/frek_process') ?>" method="post">
                            <div class="form-group">
                                <label>Frekuensi *</label>
                                <input type="hidden" name="id" value="<?=$row->id_frek?>">
                                <input type="text" name="frek" value="<?=$row->frek ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Praktikum *</label>
                                <select name="praktikum" class="form-control">
                                    <option value=""> Pilih </option>
                                    <?php 
                                        foreach($praktikum->result() as $key => $data){ ?>
                                        <option value="<?=$data->id_praktikum?>" <?=$data->id_praktikum == $row->id_praktikum ? "selected" : null?>><?=$data->praktikum?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ruangan *</label>
                                <select name="ruangan" class="form-control">
                                    <option value=""> Pilih </option>
                                    <?php 
                                        foreach($ruangan->result() as $key => $data){ ?>
                                        <option value="<?=$data->id_ruangan?>"<?=$data->id_ruangan == $row->id_ruangan ? "selected" : null?>><?=$data->ruangan?></option>
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