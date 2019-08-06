<section class="content-header">


    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle"><?=ucfirst($page)?> Praktikum </h3>
                <div class="pull-right">
                    <a href="<?= site_url('praktikum') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-user-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="box-body ">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php //echo validation_errors(); 
                        ?>
                        <form action="<?=site_url('praktikum/praktikum_process') ?>" method="post">
                            <div class="form-group">
                                <label>Praktikum *</label>
                                <input type="hidden" name="id" value="<?=$row->id_praktikum?>">
                                <input type="text" name="praktikum" value="<?=$row->praktikum ?>" class="form-control" required>
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