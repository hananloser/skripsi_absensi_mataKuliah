<section class="content-header">
   
    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle">Data Ruangan </h3>
                <div class="pull-right">
                    <a href="<?= site_url('ruangan/add') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i>Tambah
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $data->ruangan ?></td>
                                <td class="text-center" width="160px">
                                        <a href="<?= site_url('ruangan/edit/' . $data->id_ruangan) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <a href="<?= site_url('ruangan/delete/' . $data->id_ruangan) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                      
                                 
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>