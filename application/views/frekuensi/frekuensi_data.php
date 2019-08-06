<section class="content-header">
    
    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle">Pilih Frekuensi </h3>
               
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <a href="<?= site_url('frekuensi/tampil_data/'. $data->id_jadwal) ?>" class="btn btn-primary btn-xs"> <?= $data->frek ?></a>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>